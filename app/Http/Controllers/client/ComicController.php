<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Images;
use App\Service\ChapterService;
use App\Service\ComicService;
use App\Service\GenreService;

class ComicController extends Controller
{

    protected $comic;
    protected $genre;
    protected $chapter;
    public function __construct(ComicService $comic, GenreService $genre, ChapterService $chapter){
        $this->comic = $comic;
        $this->genre = $genre;
        $this->chapter = $chapter;
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

        $detailComic = $this->comic->getComicBySlug($comic);
        $allChapter = $this->chapter->getChapterByComicId($detailComic->id);
        $current_chapter = $this->chapter->getCurrentChapter($chapter, $detailComic->id);

        // get key current_chapter 
        foreach($allChapter as $key => $value){
            // dd($value['id']);
            if($value['id'] == $current_chapter->id){
                $current_key = $key;
            }
        }

        // get item first and before chapter
        if(isset($current_key)){
                $previous_chapter = isset($allChapter[$current_key-1]) ? $allChapter[$current_key-1] : null;
                $next_chapter = isset($allChapter[$current_key+1]) ? $allChapter[$current_key+1] : null;
        }

        // dd($allChapter);
        $img = $this->chapter->getImageByChapterId($current_chapter->id);
        $img_chapter = [];
        foreach ($img as $value) {
            array_push($img_chapter, $value->path);
        }
        natsort($img_chapter);
        return view('client.pages.comics.chapter', compact('img_chapter','detailComic','current_chapter','previous_chapter','next_chapter'));

    }
}