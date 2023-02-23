<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';

    protected $fillable = [
        'name',
        'slug',
        'is_public',
        'parent_id',
        'description',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;

    public function comics()
    {
        return $this->belongsToMany(Comics::class);
    }

}
