<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projector;

class ProjectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'projectors' => Projector::orderBy('created_at', 'desc')->paginate(15),
        ];
        return view('admin.projector.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projector.create');
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
        $p = new Projector();
        $p->title_ru = $request->title_ru;
        $p->title_en = $request->title_en;
        $p->save();
        return redirect(route('projector.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projector $projector)
    {
        $data = [
            'projector' => $projector,
        ];
        return view('admin.projector.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projector $projector)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
        ]);
        $projector->title_ru = $request->title_ru;
        $projector->title_en = $request->title_en;
        $projector->save();
        return redirect(route('projector.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projector $projector)
    {
        $projector->delete();
        return redirect(route('projector.index'));
    }
}
