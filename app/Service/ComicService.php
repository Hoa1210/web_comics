<?php
namespace App\Service;

use App\Models\Comics;
use App\Models\ComicsGenres;

class ComicService {

    protected $fileService;
    protected $comics;
    protected $comic_genre;
    public function __construct(FileService $fileService, Comics $comics, ComicsGenres $comic_genre){
        $this->fileService = $fileService;
        $this->comics = $comics;
        $this->comic_genre = $comic_genre;
    }

    public function createComics($request)
    {
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $path_save = 'images/comics';
            $path = $this->fileService->uploadFile($file, $path_save);
        }
        $comic = $this->comics->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'author' => $request->author,
            'img_path' => $path,
            'is_public' => $request->is_public,
            'release_date' => $request->release_date,
            'description' => $request->description,
        ]);
        if (is_array($request->genre_id)) {
            foreach ($request->genre_id as $value) {
                $this->comic_genre->create([
                    'genre_id' => $value,
                    'comic_id' => $comic->id,
                ]);
            }
        } else {
            $this->comic_genre->create([
                'comic_id' => $comic->id,
                'genre_id' => $request->genre_id
            ]);
        }

        return 1;
    }

    public function getAllComics($is_public){
        return $this->comics->where('is_public','=',$is_public)->get();
    }

    public function getComicBySlug($slug){
        return $this->getAllComics(1)->where('slug','=',$slug)->first();
    }

    public function getComicById($comic_id){
        return $this->comics->orderBy('created_at')->find($comic_id);
    }
}