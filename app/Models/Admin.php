<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'avatar',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;
}
