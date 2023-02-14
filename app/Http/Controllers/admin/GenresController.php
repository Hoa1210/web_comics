<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    protected $genres;
    public function __construct( Genres $genres){
         $this->genres = $genres;
    }
    public function index(){
        return view('admin.pages.genres.list');
    }

    public function create(){
        return view('admin.pages.genres.create');
    }

    public function store(Request $request)
    {
        $create = $this->genres->creategenres($request);
        
        return view('admin.pages.genres.create'); 
    }
}
