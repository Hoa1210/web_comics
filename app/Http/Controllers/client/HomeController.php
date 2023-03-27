<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Service\ComicService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $comic;
    public function __construct(ComicService $comic){
        $this->comic = $comic;
    }
    public function index(){
        // Auth::logout();
        // dd(Auth::guard());
        // dd(Auth::guard('users'));
        $comics = $this->comic->getAllComics(1);
        return view('client.pages.home.home',compact('comics'));
    }

}
