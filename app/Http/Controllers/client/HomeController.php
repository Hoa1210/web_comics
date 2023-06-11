<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Service\ComicService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const PUBLIC = 1;
    protected $comic;
    public function __construct(ComicService $comic){
        $this->comic = $comic;
    }
    public function index(){
        // Auth::logout();
        // dd(Auth::guard());
        // dd(Auth::guard('users'));
        // $comics = $this->comic->getAllComicAndLastChapter(HomeController::PUBLIC);
        $comics = $this->comic->getLimitComicAndLastChapter(HomeController::PUBLIC,0,12);
        // foreach($comics as $value){
        //     dd($value->chapters);
        // }
        // dd($comics);
        
        return view('client.pages.home.home',compact('comics'));
    }


    public function search(Request $request){
            $keywords = $request->keywords;
            $comic = $this->comic->searchComicBySlug($keywords);

            return response()->json($comic);
    }

}
