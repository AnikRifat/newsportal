<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $category = Category::where('status', 1)->get();
        $news = News::where('status', 1)->orderBy('id', 'DESC')->get();

        return view('front.pages.index', compact('category', 'news'));
    }
    public function category($id)
    {

        $category = Category::where('status', 1)->get();
        $news = News::where('status', 1)->get();

        $items = News::where('category_id', $id)->where('status', 1)->get();
        $categoryname = Category::find($id)->name;
        // dd($items);
        return view('front.pages.news.index', compact('items', 'categoryname', 'category', 'news'));
    }
    public function news($id)
    {

        $category = Category::where('status', 1)->get();
        $news = News::where('status', 1)->get();
        // dd($id);
        $item = News::find($id);
        return view('front.pages.news.news', compact('item', 'category', 'news'));
    }
}
