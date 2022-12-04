<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [

        'news_id',
        'category_id',
        'title',
        'subtitle',
        'author',
        'content',
        'image',
        'primary_image',
        'secondary_image',
        'status',
        'datetime',

    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
