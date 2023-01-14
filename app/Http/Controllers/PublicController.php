<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $category = Category::where('status', 1)->get();
        $news = News::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('front.pages.index', compact('category', 'news'));
    }


    public function photos()
    {
        $category = Category::where('status', 1)->get();
        return view('front.pages.photos.index', compact('category'));
    }

    public function videos()
    {
        $category = Category::where('status', 1)->get();
        // $news = News::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('front.pages.videos.index', compact('category'));
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

    public function tag($id)
    {
        $category = Category::where('status', 1)->get();
        $tag = Tag::where('status', 1)->get();
        $news = News::where('status', 1)->get();

        $items = News::where('tag_id', $id)->where('status', 1)->get();
        $tagname = Tag::find($id)->name;
        // dd($items);
        return view('front.pages.tag', compact('items', 'tagname', 'tag', 'news', 'category'));
    }

    public function news($id)
    {

        $category = Category::where('status', 1)->get();
        $news = News::where('status', 1)->get();

        // dd($id);
        $item = News::find($id);
        $comments = Comment::where('news_key', $item->key)->get();
        //  dd($comments);
        $newsItemsCat = News::where('category_id', $item->category_id)->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();
        $newsItemsCat2 = News::where('category_id', $item->category_id)->where('status', 1)->inRandomOrder()->orderBy('id', 'DESC')->take(6)->get();
        return view('front.pages.news.news', compact('item', 'category', 'news', 'newsItemsCat', 'newsItemsCat2', 'comments'));
    }

    public function videodetails($id)
    {

        // dd($id);
        $item = Video::find($id);
        $category = Category::where('status', 1)->get();
        return view('front.pages.videos.news', compact('item', 'category'));
    }
    public function photodetails($id)
    {

        // dd($id);
        $item = Photo::find($id);
        $category = Category::where('status', 1)->get();
        return view('front.pages.photos.news', compact('item', 'category'));
    }
}
