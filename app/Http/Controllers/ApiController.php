<?php

namespace App\Http\Controllers;

use App\Http\Resources\BreakingNewsResource;
use App\Http\Resources\CategoryNewsResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\NewsResource;
use App\Models\BreakingNews;
use App\Models\Category;
use App\Models\News;
use App\Models\Website;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function category()
    {
        $category = Category::where('status', 1)->orderBy('id', 'DESC')->get();

        return CategoryResource::collection($category);
    }

    public function categoryItem($categoryName)
    {
        $news = News::where('status', 1)->where('category_name', $categoryName)->orderBy('id', 'DESC')->get();
        return response()->json([
            'status' => true,
            'news' => NewsResource::collection($news),
        ]);
    }

    public function news($categoryName, $newsKey)
    {
        // dd($categoryName, $newsKey);

        $category = Category::where('status', 1)->where('name', $categoryName)->orderBy('id', 'DESC')->get();
        $news = News::where('status', 1)->where('key', $newsKey)->orderBy('id', 'DESC')->get();

        return CategoryNewsResource::collection($news);
    }


    public function breakingNews()
    {
        $breakingNews = BreakingNews::where('status', 1)->orderBy('id', 'DESC')->take(10)->get();
        return BreakingNewsResource::collection($breakingNews);
    }

    public function website()
    {
        $website = Website::find(1);
        return response()->json([
            'status' => true,
            'website' => $website,
        ]);
    }
}
