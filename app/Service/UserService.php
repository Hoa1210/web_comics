<?php
namespace App\Service;

use App\Models\User;

class UserService {
    public function getAllUser(){
        return User::get();
    }
}