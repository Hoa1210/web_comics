<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comics extends Model
{
    use HasFactory;

    protected $table = "comics";

    protected $fillable = [
        'name',
        'slug',
        'author',
        'img_path',
        'is_public',
        'release_date',
        'description',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;

    public function genres()
    {
        return $this->belongsToMany(Genres::class, 'comic_genre', 'comic_id','genre_id');
    }

    public function chapters(){
        return $this->hasMany(Chapters::class, 'comic_id');
    }

    public function createComics($request)
    {
        if ($request->hasFile('img_path')) {
            $name = date('mdYHis') . uniqid() . '.' . $request->file('img_path')->getClientOriginalExtension();
            $path = Storage::putFileAs('public/images/comics', $request->file('img_path'), $name, 'public');
        }
        $comics = Comics::create([
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
                $comic_genre = ComicsGenres::create([
                    'genre_id' => $value,
                    'comic_id' => $comics->id,
                ]);
            }
        } else {
            $comic_genre = ComicsGenres::create([
                'comic_id' => $comics->id,
                'genre_id' => $request->genre_id
            ]);
        }

        return $comic_genre;
    }
}