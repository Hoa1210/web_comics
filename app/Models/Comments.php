<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table="comments";
    protected $primakey = "id";
    protected $fillable=[
        'content',
        'user_id',
        'comic_id',
        'chapter_id',
        'parent_id',
    ];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
