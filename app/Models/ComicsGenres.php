<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicsGenres extends Model
{
    use HasFactory;

    protected $table = "comic_genre";
    protected $fillable = [
        'genre_id',
        'comic_id'
    ];

    public $timestamps = false;
}