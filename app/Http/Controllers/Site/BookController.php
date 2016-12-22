<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use Lang;

class BookController extends Controller
{
    public function index()
    {
        $data = [
            'books'=> Book::orderBy('title_' . Lang::getLocale(), 'asc')->paginate(15),
        ];
        return view('site.book.index', $data);
    }

    public function show(Book $memory_book)
    {

        $data = [
            'book'=>$memory_book,
            'pages'=>$memory_book->pages()->orderBy('position', 'asc')->get(),
            'content'=>$memory_book->pages()->where('is_link', true)->orderBy('position', 'asc')->get(),
        ];
        return view('site.book.show', $data);
    }
}
