<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Service\ComicService;
use App\Service\GenreService;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    const PUBLIC = 1;
    private $genres;
    private $comics;
    public function __construct(GenreService $genres,ComicService $comics){
        $this->genres = $genres;
        $this->comics = $comics;
    }
    public function index(){
        $list_genre = $this->genres->getAllGenres(GenreController::PUBLIC);
        return view('client.pages.genres.index', compact('list_genre'));
    }

    public function search($genre){
        $genre = $this->genres->getGenreBySlug($genre);
        $list_genre = $this->genres->getAllGenres(GenreController::PUBLIC);
        $list_comic = $genre->comics;
        return view('client.pages.genres.index', compact('list_genre','list_comic'));
    }
}
