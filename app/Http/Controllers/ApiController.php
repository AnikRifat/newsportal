<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
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
        dd($categoryName, $newsKey);
        // $category = Category::where('status', 1)->get();

        // return CategoryResource::collection(Category::all());
    }
}
