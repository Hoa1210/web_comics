<?php

namespace App\Models;

use App\Service\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;

    protected $table = "chapters";
    protected $fillable = [
        'name',
        'slug',
        'comic_id',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    public function images(){
        return $this->hasMany(Images::class, 'chapter_id');
    }

    public function comic(){
        return $this->belongsTo(Comics::class. 'comic_id');
    }
}