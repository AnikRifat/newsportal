<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [

        'key',
        'news_id',
        'category_id',
        'category_name',
        'title',
        'subtitle',
        'author',
        'content',
        'image',
        'primary_image',
        'social_image',
        'status',
        'datetime',

    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
