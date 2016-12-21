<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Page;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'books' => Book::orderBy('created_at', 'desc')->paginate(15),
        ];
        return view('admin.book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create');
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
        $b = new Book();
        $b->title_ru = $request->title_ru;
        $b->title_en = $request->title_en;
        $b->save();
        return redirect(route('book.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $data = [
            'book' => $book,
        ];
        return view('admin.book.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
        ]);
        $book->title_ru = $request->title_ru;
        $book->title_en = $request->title_en;
        $book->save();
        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('book.index'));
    }
}
