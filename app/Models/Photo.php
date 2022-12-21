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
        'subtitle',
        'content',
        'image',
        'social_image',
        'status',
        'datetime',
    ];
}
