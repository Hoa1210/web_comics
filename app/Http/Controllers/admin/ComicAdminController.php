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
            if ($comic) {
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
            return redirect()->route('admin.comics');
        } catch (ThrowUpException $e) {
            dd($e);
        }
    }
}