<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use App\Service\ComicService;
use App\Service\GenreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\Exception\ThrowUpException;

class ComicAdminController extends Controller
{
    protected $comic;
    protected $genre;
    public function __construct(ComicService $comic, GenreService $genre)
    {
        $this->comic = $comic;
        $this->genre = $genre;
    }
    public function index()
    {
        $comics = $this->comic->getAllComics(1);
        return view('admin.pages.comics.list', compact('comics'));
    }

    public function create()
    {
        $genres = $this->genre->getAllGenres(1);
        return view('admin.pages.comics.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $create = $this->comic->createComics($request);
        return redirect(route('admin.comics.create'));
    }

    public function delete($id_comic)
    {
        try {
            $genner = $this->comic->getGenreByIdComics($id_comic);
            $comic = $this->comic->getComicById($id_comic);
            if ($genner) {
                foreach ($genner as $value) {
                    $value->delete();
                }
            }
            $delete_comic = $comic->delete();
            if($delete_comic){
                if(Storage::exists($comic->img_path)){
                    Storage::delete($comic->img_path);
                }
            }
            return redirect()->route('admin.comics')->with('success','Xóa truyện thành công!!');
        } catch (ThrowUpException $e) {
            // dd($e);
            return redirect()->route('admin.comics')->with('error','Lỗi!!');
        }
    }

    public function edit($id_comic){
        try {
            $comic = $this->comic->getComicById($id_comic);
            $genres = $this->genre->getAllGenres(1);
            $comic_genres = $this->comic->getGenreByIdComics($id_comic);
            return view('admin.pages.comics.edit',compact('comic','genres','comic_genres')); 
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function update($id_comic, Request $request){
        try {
            $update = $this->comic->updateComics($id_comic,$request);
            return redirect()->route('admin.comics');
            
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}