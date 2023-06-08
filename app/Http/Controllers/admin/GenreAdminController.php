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
        $genres = $this->genre->getAllGenres(1);
        return view('admin.pages.genres.list',compact('genres'));
    }

    public function create(){
        return view('admin.pages.genres.create');
    }

    public function store(Request $request)
    {
        $create = $this->genre->createGenres($request);
        
        return view('admin.pages.genres.create'); 
    }

    public function edit($id_genre){
        $genre = $this->genre->getGenreById($id_genre);
        return view('admin.pages.genres.edit',compact('genre'));
    }

    public function update($id_genre, Request $request){
         $update = $this->genre->updateGenre($id_genre, $request);
         return redirect()->route('admin.genres')->with('success','Thay đổi thành công!!');
    }

    public function delete($id_genre){
        try{
            $delete = $this->genre->deleteGenre($id_genre);
            return redirect()->route('admin.genres')->with('success','Xóa thành công thể loại!!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.genres')->with('error','Vẫn còn truyện thuộc thể loại này! Không được xóa');
        }
    }
}
