<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Genres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicsController extends Controller
{
    protected $comics;
    protected $chapters;
    public function __construct(Comics $comics, Chapters $chapters){
        $this->comics = $comics;
        $this->chapters = $chapters;
    }
    public function index(){
        $comics = Comics::where('is_public',1)->get();
        return view('admin.pages.comics.list',compact('comics'));
    }

    public function create(){
        $genres = Genres::where('is_public',1)->get();
        return view('admin.pages.comics.create', compact('genres'));
    }

    public function store(Request $request){
        $create = $this->comics->createComics($request);
        return redirect(route('admin.comics.create'));
    }

    public function chapter_create(){
        $comics = Comics::where('is_public',1)->get();
        // dd($comics->toArray());
        return view('admin.pages.comics.chapter-create',compact('comics'));
    }

    public function chapter_store(Request $request){
        $create = $this->chapters->createChapter($request);
        return redirect(route('admin.chapter.create'));
    }
}
