<?php 
namespace App\Service;

use App\Models\Genres;

class GenreService {

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
}