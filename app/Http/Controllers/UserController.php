<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view("user.index");
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
