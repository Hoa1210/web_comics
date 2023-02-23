<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComicController extends Controller
{
    public function index($comic)
    {

        $detailComic = Comics::where('is_public', 1)->where('slug', $comic)->first();
        $genres = Comics::find($detailComic->id)->genres;
        $chapters = Comics::find(($detailComic->id))->chapters;
        return view('client.pages.comics.index', compact('detailComic', 'genres', 'chapters'));

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