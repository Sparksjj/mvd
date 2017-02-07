<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(15),
        ];
        return view('admin.article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            'content_ru' => 'required',
        ]);
        
        $article = new Article();
        $article->title_ru = $request->title_ru;

        if ($request->has('title_en')) {
            $article->title_en = $request->title_en;
        }

        $article->content_ru = $request->content_ru;

        if ($request->has('content_en')) {
            $article->content_en = $request->content_en;
        }
        $article->save();
        return redirect(route('adminarticle.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $adminarticle)
    {
        $data = [
            'article' => $adminarticle,
            'images' => $adminarticle->images,
        ];
        return view('admin.article.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $adminarticle)
    {
        $data = [
            'article' => $adminarticle,
        ];
        return view('admin.article.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $adminarticle)
    {
        $this->validate($request,[
            'title_ru' => 'required',
            'content_ru' => 'required',
        ]);

        $adminarticle->title_ru = $request->title_ru;        
        $adminarticle->content_ru = $request->content_ru;

        if ($request->has('title_en')) {
            $adminarticle->title_en = $request->title_en;
        }

        if ($request->has('content_en')) {
            $adminarticle->content_en = $request->content_en;
        }

        $adminarticle->save();

        return redirect(route('adminarticle.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $adminarticle)
    {
        $adminarticle->delete();
        return redirect(route('adminarticle.index'));
    }

    public function uploadImage(Request $request, $id)
    {
        $files = $request->file('sl_images');
        $article = Article::where('id', $id)->first();

        if (count($files) > 0) {
            foreach ($files as $key => $file) {
                $file_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
                $file->move('./images/article_slider/', $file_name);
                $image = new Image();
                $image->src = '/images/article_slider/'. $file_name;
                $article->images()->save($image);
            }
        }

        return redirect(route('adminarticle.show', $article));
    }

    public function destroySlImage($id)
    {
        $image = Image::where('id', $id)->first();
        $article = $image->imageable;
        $image->imageable()->dissociate();
        $image->delete();
        return redirect(route('adminarticle.show', $article));
    }
}
