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

    public function users()
    {
        return $this->belongsToMany(User::class, 'farvorites', 'comic_id','user_id');
    }

}