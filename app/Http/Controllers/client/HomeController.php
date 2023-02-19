<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $comics = Comics::where('is_public',1)->get();
        return view('client.pages.home.home',compact('comics'));
    }

    public function detailComics($comic){
        $detailComic = Comics::where('is_public',1)->where('slug',$comic)->get();
        dd($detailComic->genres);
        return view('client.pages.comics.detailComics',compact('comic')); 
    }
}
