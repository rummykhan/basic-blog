<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function doLogin(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        /** @var User $model */
        $model = User::where('email', $email)->first();

        if(!$model){
            return back()->with('error', 'User doesnot exist');
        }

        if(!Hash::check($password, $model->password)){
            return back()->with('error', 'Invalid password');
        }

        Auth::login($model);

        return redirect()->route('user-home');

    }
}
