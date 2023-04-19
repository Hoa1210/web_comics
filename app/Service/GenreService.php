<?php 
namespace App\Service;

use App\Models\Comics;
use App\Models\Genres;

class GenreService {

    const PUBLIC = 1;
    const PRIVATE = 0;

    protected $genre;
    public function __construct(Genres $genre){
        $this->genre = $genre;
    }

    public function createGenres($request){
        $genres = $this->genre->create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);
        return $genres;
    }
    public function getAllGenres($is_public){
        return $this->genre->where('is_public','=',$is_public)->get();
    }
    public function getGenreBySlug($slug){
        return $this->getAllGenres(GenreService::PUBLIC)->where('slug','=',$slug)->first();
    }
}