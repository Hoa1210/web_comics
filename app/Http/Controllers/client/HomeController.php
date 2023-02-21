<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Comics;

class HomeController extends Controller
{
    //

    public function index(){
        $comics = Comics::where('is_public',1)->get();
        return view('client.pages.home.home',compact('comics'));
    }

}
