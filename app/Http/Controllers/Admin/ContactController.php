<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contactadmin)
    {
        /*dd($contactadmin->toArray());*/
        $data = [
            'contact' => $contactadmin,
        ];
        return view('admin.contact.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contactadmin)
    {
        $data = [
            'contact' => $contactadmin,
        ];
        return view('admin.contact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contactadmin)
    {
        $this->validate($request,[
            'content_ru' => 'required',
            'content_en' => 'required',
        ]);
        $contactadmin->content_ru = $request->content_ru;
        $contactadmin->content_en = $request->content_en;
        $contactadmin->save();
        return redirect(route('contactadmin.show', 1));
    }
}
