<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service\ComicService;
use App\Service\GenreService;
use Illuminate\Http\Request;

class ComicAdminController extends Controller
{
    protected $comic;
    protected $genre;
    public function __construct(ComicService $comic, GenreService $genre){
        $this->comic = $comic;
        $this->genre = $genre;
    }
    public function index(){
        $comics = $this->comic->getAllComics(1);
        return view('admin.pages.comics.list',compact('comics'));
    }

    public function create(){
        $genres = $this->genre->getAllGenres(1);
        return view('admin.pages.comics.create', compact('genres'));
    }

    public function store(Request $request){
        $create = $this->comic->createComics($request);
        return redirect(route('admin.comics.create'));
    }
}
