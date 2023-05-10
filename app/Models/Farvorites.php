<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farvorites extends Model
{
    use HasFactory;
    protected $table = "farvorites";
    protected $primakey = "id";
    protected $fillable = [
        'user_id',
        'comic_id' 
    ];

    public $timestamps = false;
}
