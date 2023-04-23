<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('client.auth.login');
    }

    public function logout(){
        auth('user')->logout();
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

        $admin = Admin::where('email' , $credentials['email'])->first();
        
        if($admin && Hash::check($request->password, $admin->password) ){
            auth('admin')->login($admin);
            return redirect()->route('admin.home');
        }
 
        return back()->withErrors([
            'email' => 'Hãy kiểm tra lại email và mật khẩu.',
        ])->onlyInput('email');
    }

    public function logoutAdmin(){
        auth('admin')->logout();
        // Auth::guards('users')->logout();
        return redirect()->route('admin.login');
    }
}
