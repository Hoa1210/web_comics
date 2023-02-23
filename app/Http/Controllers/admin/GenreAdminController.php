<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\genres;
use App\Service\GenreService;
use Illuminate\Http\Request;

class GenreAdminController extends Controller
{
    protected $genre;
    public function __construct( GenreService $genre){
         $this->genre = $genre;
    }
    public function index(){
        return view('admin.pages.genres.list');
    }

    public function create(){
        return view('admin.pages.genres.create');
    }

    public function store(Request $request)
    {
        $create = $this->genre->createGenres($request);
        
        return view('admin.pages.genres.create'); 
    }
}
