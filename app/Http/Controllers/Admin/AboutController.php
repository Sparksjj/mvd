<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $aboutadmin)
    {
        /*dd($aboutadmin->toArray());*/
        $data = [
            'about' => $aboutadmin,
        ];
        return view('admin.about.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $aboutadmin)
    {
        $data = [
            'about' => $aboutadmin,
        ];
        return view('admin.about.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $aboutadmin)
    {
        $this->validate($request,[
            'content_ru' => 'required',
            'content_en' => 'required',
        ]);
        $aboutadmin->content_ru = $request->content_ru;
        $aboutadmin->content_en = $request->content_en;
        $aboutadmin->save();
        return redirect(route('aboutadmin.show', 1));
    }

}
