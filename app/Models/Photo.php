<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_id',
        'key',
        'title',
        'reporter',
        'subtitle',
        'content',
        'image',
        'caption',
        'social_image',
        'status',
        'datetime',
    ];
}
