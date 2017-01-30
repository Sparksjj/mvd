<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Source;
use App\Category;
use App\Helpers\StrHelper;
use App\Helpers\ControlHelper;
use App\Helpers\TreeHelper;
use Route;
use Carbon\Carbon;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'category' => Category::where('id', $request->categoryId)->first(),
            'categories' => Category::all(),
            'tree' => TreeHelper::getTree(),
        ];
        $key = $request->key ?? '';
        if ($data['category'] == null) {
            $data['documents'] = Document::orderBy('created_at', 'desc')
                ->where('title_ru', 'like', '%' . $key . '%')
                ->orWhere('title_en', 'like', '%' . $key . '%')
                ->paginate(15);
        }else{
            $data['documents'] = $data['category']->documents()
                ->orderBy('created_at', 'desc')
                ->where('title_ru', 'like', '%' . $key . '%')
                ->where('title_en', 'like', '%' . $key . '%')
                ->paginate(15);
        }

        return view('admin.document.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=[
            'categories' => Category::all(),
            'documents' => Document::all(),
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
            'tree' => TreeHelper::getTree(),
        ];

        if ($request->categoryId == null) {
            $data['from_category'] = ['id'=>null];
        }else{
            $data['from_category'] = Category::where('id', $request->categoryId)->first();
        }
        return view('admin.document.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_ru' => 'required',
            'inventory_number' => 'required|max:255|unique:documents,inventory_number',
            'document' => 'required',
        ]);

        $cat = Category::where('id', $request->category)->first();
        $catFolder = StrHelper::getCatFolder($cat, $request->title_en) ;
        $catPath = '/documents/' . $request->type . '/';

        $doc = new Document();

        $doc->type = $request->type;
        $doc->title_ru = $request->title_ru;
        $doc->inventory_number = $request->inventory_number;
        $doc->is_public = (bool) $request->is_public;

        if ($request->has('title_en')) {
            $doc->title_en = $request->title_en;
        }
        if ($request->has('description_ru')) {
            $doc->description_ru = $request->description_ru;
        }
        if ($request->has('description_en')) {
            $doc->description_en = $request->description_en;
        }        
        if ($request->has('author')) {
            $doc->author = $request->author;
        }        
        if ($request->has('get_number')) {
            $doc->get_number = $request->get_number;
        }
        if ($request->has('get_data')) {
            $doc->get_data = Carbon::createFromFormat('Y-m-d', $request->get_data)->format('Y-m-d');
        }
        if ($request->has('fzk_number')) {
            $doc->fzk_number = $request->fzk_number;
        }
        if ($request->has('fzk_data')) {
            $doc->fzk_data = Carbon::createFromFormat('Y-m-d', $request->fzk_data)->format('Y-m-d');
        }
        if ($request->has('height') || $request->has('width')  || $request->has('length')) {
            $doc->size = $request->input('height', '0') . 'x' . $request->input('width', '0') . 'x' . $request->input('length', '0');
        }        
        if ($request->has('parts_count')) {
            $doc->parts_count = $request->parts_count;
        }
        if ($request->has('safety')) {
            $doc->safety = $request->safety;
        }
        if ($request->has('storage')) {
            $doc->storage = $request->storage;
        }
        if ($request->has('material')) {
            $doc->material = $request->material;
        }
        if ($request->has('weight')) {
            $doc->weight = $request->weight;
        }

        $cat->documents()->save($doc);

        $files = $request->file('document');
            usort($files, function($a,$b){
            return $a->getClientOriginalName()>$b->getClientOriginalName();
        });
        foreach ($files as $key => $file) {
            $file_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
            $file->move('.' . $catPath . $catFolder, $file_name);
            $source = new Source();
            $source->path = $catPath . $catFolder . $file_name;
            $doc->sources()->save($source);
        }

        if (isset($request->join_item)){
            if (count($request->join_item) != 0) {
                $doc->join_documents()->sync($request->join_item);
            }
        }

        return redirect(route('documents.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {

        $document->get_data = substr($document->get_data, 0, 10);
        $document->fzk_data = substr($document->fzk_data, 0, 10);
        $data = [
            'document' => $document,
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
            'tree' => TreeHelper::getTree(),
            'sources' => $document->sources,
        ];
        return view('admin.document.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        $size = explode('x', $document->size);
        $document->get_data = substr($document->get_data, 0, 10);
        $document->fzk_data = substr($document->fzk_data, 0, 10);
        $data = [
            'document' => $document,
            'documents' => Document::whereNotIn('id', [$document->id])->get(),
            'sources' => $document->sources,
            'catId' => $document->category->id,
            'categories' => Category::all(),
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
            'tree' => TreeHelper::getTree(),
            'height' => '',
            'width' => '',
            'length' => '',
        ];

        if ($document->size) {
            $data['height'] = $size[0];
            $data['width'] = $size[1];
            $data['length'] = $size[2];
        }
        return view('admin.document.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $this->validate($request,[
            'title_ru' => 'required',
            'inventory_number' => 'required|max:255|unique:documents,inventory_number,' . $document->id,
        ]);

        $cat = Category::where('id', $request->category)->first();
        $catFolder = StrHelper::getCatFolder($cat, $document->title_en) . '/' . $request->type;
        $catPath = '/documents/' . $document->type . '/';
        $files = $request->file('document');
    
        $document->title_ru = $request->title_ru;
        $document->inventory_number = $request->inventory_number;
        $document->is_public = (bool) $request->is_public;

        if ($request->has('description_ru')) {
            $document->description_ru = $request->description_ru;
        }
        if ($request->has('title_en')) {
            $document->title_en = $request->title_en;
        }else{
            $document->title_en = null;
        }
        if ($request->has('description_en')) {
            $document->description_en = $request->description_en;
        }        
        if ($request->has('author')) {
            $document->author = $request->author;
        }        
        if ($request->has('get_number')) {
            $document->get_number = $request->get_number;
        }
        if ($request->has('get_data')) {
            $document->get_data = Carbon::createFromFormat('Y-m-d', $request->get_data)->format('Y-m-d');
        }
        if ($request->has('fzk_number')) {
            $document->fzk_number = $request->fzk_number;
        }
        if ($request->has('fzk_data')) {
            $document->fzk_data = Carbon::createFromFormat('Y-m-d', $request->fzk_data)->format('Y-m-d');
        }
        if ($request->has('height') || $request->has('width')  || $request->has('length')) {
            $document->size = $request->input('height', '0') . 'x' . $request->input('width', '0') . 'x' . $request->input('length', '0');
        }        
        if ($request->has('parts_count')) {
            $document->parts_count = $request->parts_count;
        }
        if ($request->has('safety')) {
            $document->safety = $request->safety;
        }
        if ($request->has('storage')) {
            $document->storage = $request->storage;
        }
        if ($request->has('material')) {
            $document->material = $request->material;
        }
        if ($request->has('weight')) {
            $document->weight = $request->weight;
        }

        if (isset($request->join_item)){
            if (count($request->join_item) != 0) {
                $document->join_documents()->sync($request->join_item);
            } else if ( count($request->join_item) == 0) {
                $document->join_documents()->sync([]);
            }
        } else {
            $document->join_documents()->sync([]);
        }

        $cat->documents()->save($document);

        if ($files) {
            usort($files, function($a,$b){
                return $a->getClientOriginalName()>$b->getClientOriginalName();
            });
            $document->sources()->delete();
            foreach ($files as $key => $file) {
                $file_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
                $file->move('.' . $catPath . $catFolder, $file_name);
                $source = new Source();
                $source->path = $catPath . $catFolder . $file_name;
                $document->sources()->save($source);

            }
        }

        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->join_documents()->detach();
        $document->delete();
        return redirect(route('documents.index'));
    }

    public function destroySource($id)
    {
        $source = Source::where('id', $id)->first();
        $doc = $source->document;
        $source->document()->dissociate();
        $source->delete();
        return redirect(route('documents.show', $doc));
    }
}