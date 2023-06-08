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
            'slug' => $request->slug,
            'is_public' => $request->is_public,
            'description' => $request->description
        ]);
        return $genres;
    }

    public function updateGenre($id_genre, $request){
        $genre = $this->getGenreById($id_genre);
        $genre->name = $request->name;
        $genre->slug = $request->slug;
        $genre->is_public = $request->is_public;
        $genre->description = $request->description;
        $genre->save();
        return 1;
    }

    public function deleteGenre($id_genre){
        return $this->getGenreById($id_genre)->delete();
        
    }


    public function getAllGenres($is_public){
        return $this->genre->where('is_public','=',$is_public)->get();
    }
    public function getGenreBySlug($slug){
        return $this->getAllGenres(GenreService::PUBLIC)->where('slug','=',$slug)->first();
    }
    public function getGenreById($id_genre){
        return $this->genre->find($id_genre);
    }
}