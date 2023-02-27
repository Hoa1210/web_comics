<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Images;
use App\Service\ComicService;
use App\Service\GenreService;

class ComicController extends Controller
{

    protected $comic;
protected $genre;
    public function __construct(ComicService $comic, GenreService $genre){
        $this->comic = $comic;
        $this->genre = $genre;
    }
    public function index($comic)
    {

        $detailComic = $this->comic->getComicBySlug($comic);
        $genres = $this->comic->getComicById($detailComic->id)->genres;
        $chapters = $this->comic->getComicById($detailComic->id)->chapters;
        $arrChapter = $chapters->toArray();
        $firstChapter = reset($arrChapter);
        $lastChapter = end($arrChapter);
        return view('client.pages.comics.index', compact('detailComic', 'genres', 'chapters','firstChapter','lastChapter'));

    }

    public function chapter($comic, $chapter)
    {

        $detailComic = Comics::where('is_public', 1)->where('slug', $comic)->first();
        $chapter_id = Chapters::where([
            'slug' => $chapter,
            'comic_id' => $detailComic->id
        ])->first()->id;
        $img = Images::where('chapter_id', $chapter_id)->get();
        $img_chapter = [];
        foreach ($img as $value) {
            array_push($img_chapter, $value->path);
        }
        natsort($img_chapter);
        return view('client.pages.comics.chapter', compact('img_chapter'));

    }
}