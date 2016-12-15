<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => User::orderBy('created_at', 'desc')->whereNotIn('id', [Auth::user()->id])->paginate(15),
        ];
        return view('admin.user.index', $data);
    }


    public function update(Request $request, User $adminuser)
    {
        $adminuser->groups()->sync([$request->group_id]);
        return redirect(route('adminuser.index'))->with('flash_note', 'Пользователь успешно изменен')->with('type', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::where('id', $id)->first();
        $u -> groups() ->detach();
        $u -> delete();
        return redirect(route('adminuser.index'))->with('flash_note', 'Пользователь успешно удален')->with('type', 'alert-success');
    }
}
