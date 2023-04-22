<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('client.auth.login');
    }

    public function logout(){
        Auth::logout();
        // dd(Auth::user());
        // Auth::guards('users')->logout();
        return redirect()->route('home');
    }

    public function loginAdmin(){
        return view('admin.auth.login');
    }

    public function authAdmin(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email' , $credentials['email'])->first();
        if($user && $credentials['password'] == $user->password ){
            Auth::login($user);
            return redirect()->route('admin.home');
        }
 
        return back()->withErrors([
            'email' => 'Hãy kiểm tra lại email và mật khẩu.',
        ])->onlyInput('email');
    }

    public function logoutAdmin(){
        Auth::logout();
        // Auth::guards('users')->logout();
        return redirect()->route('admin.login');
    }
}
