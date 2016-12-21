<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;
use App\User;
use App\Projector;
use App\Book;
use App\Group;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'devices' => Device::orderBy('created_at', 'desc')->paginate(15),
        ];
        return view('admin.device.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'users' => Group::where('id', 3)->first()->users,
            'books' => Book::orderBy('created_at', 'desc')->get(),
            'projectors' => Projector::orderBy('created_at', 'desc')->get(),
        ];
        return view('admin.device.create', $data);
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
            'user_id' => 'required',
            'permitted_page' => 'required',
        ]);
        $device = new Device;

        $device->title_ru = $request->title_ru;
        $device->title_en = $request->title_en;
        $device->permitted_page = $request->permitted_page;

        $u = User::where('id', $request->user_id)->first();
        $u->devices()->save($device);
        return redirect(route('admindevice.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $admindevice)
    {
        $data = [
            'device' => $admindevice,
            'users' => Group::where('id', 3)->first()->users,
            'books' => Book::orderBy('created_at', 'desc')->get(),
            'projectors' => Projector::orderBy('created_at', 'desc')->get(),
        ];
        return view('admin.device.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $admindevice)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'user_id' => 'required',
            'permitted_page' => 'required',
        ]);

        $admindevice->title_ru = $request->title_ru;
        $admindevice->title_en = $request->title_en;
        $admindevice->permitted_page = $request->permitted_page;

        $u = User::where('id', $request->user_id)->first();
        $u->devices()->save($admindevice);

        return redirect(route('admindevice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $admindevice)
    {
        $admindevice->delete();
        return redirect(route('admindevice.index'));
    }
}
