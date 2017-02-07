<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Lang;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = [
            'articles'=> Article::orderBy('title_' . Lang::getLocale(), 'asc')->paginate(15),
        ];
        return view('site.article.index', $data);
    }

    public function show(Article $article)
    {
        $data = [
            'article'=>$article,
            'sl_images'=>$article->images,
        ];
        return view('site.article.show', $data);
    }
}