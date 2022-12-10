<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryNewsResource;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function category()
    {
        $category = Category::where('status', 1)->get();

        return CategoryResource::collection(Category::all());
    }

    public function news($categoryName, $newsKey)
    {
        // dd($categoryName, $newsKey);

        $category = Category::where('status', 1)->where('name', $categoryName)->get();
        $news = News::where('status', 1)->where('key', $newsKey)->get();

        return CategoryNewsResource::collection($news);
    }
}
