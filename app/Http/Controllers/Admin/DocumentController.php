<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;
use App\Helpers\StrHelper;
use App\Helpers\ControlHelper;
use Route;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'documents' => Document::paginate(15),
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
        ];
        return view('admin.document.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'categories' => Category::all(),
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
        ];
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
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'category' => 'required',
            'document' => 'required',
        ]);

        $cat = Category::where('id', $request->category)->first();
        $catFolder = StrHelper::getCatFolder($cat);

        $file = $request->file('document');
        $file_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
        $file->move('./documents/pdf/' . $catFolder . '/', $file_name);


        $doc = new Document();

        $doc->path = '/documents/pdf/' . $catFolder . '/' . $file_name;
        $doc->title_ru = $request->title_ru;
        $doc->title_en = $request->title_en;
        /*$doc->save($cat);*/
        $cat->documents()->save($doc);
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
        $data = [
            'document' => $document,
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
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
        $data = [
            'document' => $document,
            'catId' => $document->category->id,
            'categories' => Category::all(),
            'hrefs' => ControlHelper::getControllPathis(Route::getCurrentRequest()->path()),
        ];
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
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'category' => 'required',
        ]);

        $cat = Category::where('id', $request->category)->first();
        $catFolder = StrHelper::getCatFolder($cat);

        $file = $request->file('document');
        if ($file) {
            $file_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
            $file->move('./documents/pdf/' . $catFolder . '/', $file_name);
            $document->path = '/documents/pdf/' . $catFolder . '/' . $file_name;
        }

        $document->title_ru = $request->title_ru;
        $document->title_en = $request->title_en;
        /*$doc->save($cat);*/
        $cat->documents()->save($document);
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
        $document->delete();
        return redirect(route('documents.index'));
    }
}