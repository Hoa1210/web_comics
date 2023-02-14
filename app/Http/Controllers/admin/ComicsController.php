<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use App\Models\Genres;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    protected $comics;
    public function __construct(Comics $comics){
        $this->comics = $comics;
    }
    public function index(){
        return view('admin.pages.comics.list');
    }

    public function create(){
        $genres = Genres::where('is_public',1)->get();
        return view('admin.pages.comics.create', compact('genres'));
    }

    public function store(Request $request){
        $create = $this->comics->createComics($request);
        return redirect(route('admin.pages.comics.create'));
    }
}
