<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComicController extends Controller
{
    public function detailComics($comic)
    {
        try {
            $detailComic = Comics::where('is_public', 1)->where('slug', $comic)->first();
            $genres = Comics::find($detailComic->id)->genres;
            $chapters = Comics::find(($detailComic->id))->chapters;
            return view('client.pages.comics.detailComics', compact('detailComic', 'genres', 'chapters'));
        } catch (\Exception $e) {
            Log::error('Error inserting user: ' . $e->getMessage());
            return back()->withErrors(['message' => 'An error occurred. Please try again.']);
        }
    }

    public function chapter($comic, $chapter)
    {
        try {
            //code...
        } catch (\Exception $e) {
            Log::error('Error inserting user: ' . $e->getMessage());
            return back()->withErrors(['message' => 'An error occurred. Please try again.']);
        }
    }
}