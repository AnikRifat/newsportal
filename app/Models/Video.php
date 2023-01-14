<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_id',
        'key',
        'title',
        'reporter',
        'subtitle',
        'content',
        'thumbnail',
        'link',
        'social_image',
        'status',
        'datetime',
    ];
}
