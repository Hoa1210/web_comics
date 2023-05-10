<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Images;
use App\Service\ChapterService;
use App\Service\ComicService;
use App\Service\CommentService;
use App\Service\GenreService;

class ComicController extends Controller
{

    protected $comic;
    protected $genre;
    protected $chapter;
    protected $comment;
    public function __construct(ComicService $comic, GenreService $genre, ChapterService $chapter, CommentService $comment){
        $this->comic = $comic;
        $this->genre = $genre;
        $this->chapter = $chapter;
        $this->comment = $comment;
    }
    public function index($comic)
    {

        $detailComic = $this->comic->getComicBySlug($comic);
        $genres = $this->comic->getComicById($detailComic->id)->genres;
        $chapters = $this->comic->getComicById($detailComic->id)->chapters;
        $arrChapter = $chapters->toArray();
        $firstChapter = reset($arrChapter);
        $lastChapter = end($arrChapter);
        $comments = $this->comment->getCommentByComic($detailComic->id);

        return view('client.pages.comics.index', compact('detailComic', 'genres', 'chapters','firstChapter','lastChapter','comments'));

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
        // dd($allChapter);
        return view('client.pages.comics.chapter', compact('img_chapter','detailComic','current_chapter','previous_chapter','next_chapter','allChapter'));

    }
}