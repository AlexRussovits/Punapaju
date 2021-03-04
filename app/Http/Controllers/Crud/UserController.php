<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read() {
        $users = User::orderBy('id','asc')->get();
        return view('dashboard.user_dashboard', compact('users'));
    }
}
