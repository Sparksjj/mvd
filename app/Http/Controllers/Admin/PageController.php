<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Book;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($book)
    {
        $book = Book::where('id', $book)->first();
        $data = [
            'pages' => $book->pages()->orderBy('position', 'asc')->paginate(15),
            'book' => $book,
        ];
        return view('admin.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($book)
    {
        $book = Book::where('id', $book)->first();
        $data = [
            'pages' => $book->pages,
            'book' => $book,
        ];
        return view('admin.page.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $book)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'max:255',
            'position' => 'required',
            'content_ru' => 'required',
        ]);
        $book = Book::where('id', $book)->first();
        $all_pages = $book->pages;
        
        $p = new Page();
        $p->title_ru = $request->title_ru;

        if ($request->has('title_en')) {
            $p->title_en = $request->title_en;
        }

        $p->content_ru = $request->content_ru;

        if ($request->has('content_en')) {
            $p->content_en = $request->content_en;
        }

        $p->is_link = (bool) $request->is_link;
        $p->position = $request->position;

        if ($request->position <= count($all_pages)) {
            $pages = $book->pages()->orderBy('position', 'asc')->where('position', '>', $request->position-1)->get();
            foreach ($pages as $key => $page) {
                $page->position = $page->position+1;
                $page->save();
            }
        }
        $book->pages()->save($p);

        return redirect(route('book.page.index', $book));
    }

    public function edit($book, Page $page)
    {
        $book = Book::where('id', $book)->first();
        $data = [
            'page' => $page,
            'pages' => $book->pages,
            'book' => $book,
        ];
        
        return view('admin.page.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book, Page $page)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'max:255',
            'position' => 'required',
            'content_ru' => 'required',
        ]);
        $book = Book::where('id', $book)->first();

        $page->title_ru = $request->title_ru;
        
        if ($request->has('title_en')) {
            $page->title_en = $request->title_en;
        }

        if ($request->has('content_en')) {
            $page->content_en = $request->content_en;
        }

        $page->content_ru = $request->content_ru;

        $page->is_link = (bool) $request->is_link;

        if ($request->position < $page->position) {
            $pages = $book->pages()->orderBy('position', 'asc')->whereBetween('position', [$request->position, $page->position])->get();
            foreach ($pages as $key => $p) {
                $p->position = $p->position+1;
                $p->save();
            }
        }else if($request->position > $page->position){
            $pages = $book->pages()->orderBy('position', 'asc')->whereBetween('position', [$page->position, $request->position])->get();
            foreach ($pages as $key => $p) {
                $p->position = $p->position-1;
                $p->save();
            }            
        }

        $page->position = $request->position;
        $book->pages()->save($page);

        return redirect(route('book.page.index', $book));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book, Page $page)
    {
        $book = Book::where('id', $book)->first();
        $all_pages = $book->pages;

        if ($page->position < count($all_pages)) {
            $pages = $book->pages()->orderBy('position', 'asc')->whereBetween('position', [$page->position, count($all_pages)])->get();
            foreach ($pages as $key => $p) {
                $p->position = $p->position-1;
                $p->save();
            }
        }

        $page->delete();

        return redirect(route('book.page.index', $book));
    }
}
