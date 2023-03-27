<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('client.auth.login');
    }

    public function logout(){
        // Auth::logout();
        Auth::guards('users')->logout();
        return redirect()->route('home');
    }
}
