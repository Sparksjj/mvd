<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;
use App\Helpers\StrHelper;
use App\Helpers\ControlHelper;
use App\Helpers\TreeHelper;
use Route;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->key ?? '';
        $data = [
            'tree' => TreeHelper::getTree(),
        ];
        if ($key) {
            $data['categories'] = Category::orderBy('created_at', 'desc')
                ->where('title_ru', 'like', '%' . $key . '%')
                ->orWhere('title_en', 'like', '%' . $key . '%')
                ->paginate(15);
        }else{
            $max_depth = 10;
            $slug = str_repeat('children.', $max_depth);
            $slug = substr($slug, 0, -1);
            $data['categories'] = Category::orderBy('created_at', 'desc')->select()->with($slug)->whereParentId(null)->paginate(15);
        }
        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=[
            'tree' => TreeHelper::getTree(),
            'categories' => Category::all(),
        ];
        
        return view('admin.category.create', $data);
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
        ]);

        $cat = new Category();
        $cat->title_ru = $request->title_ru;
        $cat->title_en = $request->title_en;
        if($request->parent_id == 'null') {
            $cat->parent_id = Null;
        } else if(is_numeric($request->parent_id)) {
            $cat->parent_id = $request->parent_id;
        }
        $cat->save();

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $data = [
            'category' => $category,
            'tree' => TreeHelper::getTree(),
            'documents' => $category->documents,
        ];
        return view('admin.category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            'category' => $category,
            'tree' => TreeHelper::getTree(),
            'categories' => Category::all(),
        ];
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
        ]);

        $category->title_ru = $request->title_ru;
        $category->title_en = $request->title_en;
        $category->parent_id = $request->parent_id;

        $category->save();

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'));
    }
}
