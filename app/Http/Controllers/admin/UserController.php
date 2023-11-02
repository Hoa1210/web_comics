<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function __construct(UserService $user){
        $this->user = $user;
    }

    public function index(){
        $users = $this->user->getAllUser();
        return view('admin.pages.users.list', compact('users'));
    }

    public function create(){
        return view('admin.pages.users.create');
    }

    public function store(){
        
    }
    
    public function edit($user_id){

    }

    public function delete($user_id){
        
    }

}
