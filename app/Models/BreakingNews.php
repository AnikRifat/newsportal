<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;
    protected $fillable = [

        'key',
        'news_id',
        'category_id',
        'category_name',
        'tag_id',
        'tag_name',
        'title',
        'reporter',
        'subtitle',
        'author',
        'content',
        'image',
        'caption',
        'primary_image',
        'social_image',
        'status',
        'datetime',

    ];
}
