<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function read() {
        $users = User::orderBy('id','asc')->get();
        return view('dashboard.user_dashboard', compact('users'));
    }

    public function showCreateUser() {
        return view('dashboard.create.user_create');
    }

    public function createUser(Request $request) {
        $name = $request->name;
        $username = $request->username;
        $password = Hash::make($request->password);
        User::create([
            'name' => $name,
            'username' => $username,
            'password' => $password
        ]);
        return redirect('/dashboard/user_dashboard')->with(['success_delivery'=>true]);
    }

    public function showUser($id)
    {
        $user = User::find($id);
        if (!empty($user)) {
            return view('dashboard.edit.user_edit', compact('user'));
        } else {
            return abort('404');
        }
    }
    public function editUser($id,Request $request) {
        $user = User::find($id);
        if(!empty($user)) {
            $request->validate([
                'name'=> 'max:255|required',
                'username' => 'max:255|required',
                'password'=> 'max:255|required',
            ]);
        }else{
            return abort('404');
        }
        if(($user->fill($request->except(['_token'])))->save()) {
            return redirect('/dashboard/user_dashboard')->with(['success_delivery'=>true]);
        }else{
            return abort('404');
        }
    }

    public function destroyUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard/user_dashboard')->with(['success_delivery'=>true]);
    }
}
