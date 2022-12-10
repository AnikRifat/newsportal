<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class NewsController extends Controller
{


    public function news()
    {
        $news = News::where('status', 1)->orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'news' => $news,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('author', Auth::user()->name)->orderBy('id', 'DESC')->get();;
        $newsAll = News::orderBy('id', 'DESC')->get();

        return view('admin.pages.news.index', compact('news', 'newsAll'));
    }
    public function pending()
    {
        $news = News::where('author', Auth::user()->name)->where('status', 2)->orderBy('id', 'DESC')->get();
        $newsAll = News::where('status', 2)->orderBy('id', 'DESC')->get();

        return view('admin.pages.news.pending', compact('news', 'newsAll'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd();
        $category = Category::all();
        return view('admin.pages.news.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        $news_id = '#mp-' . date('YmdHis');
        $datetime = bangla_date(time(), "en");

        $input = $request->all();
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['image'] = asset('') . $filelink;
            // dd($input['image']);
        }
        if ($img = $request->file('primary_image')) {
            $image = Image::make($img)->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        }
        if ($img = $request->file('social_image')) {
            $image = Image::make($img)->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        }

        $input['news_id'] = $news_id;

        $input['category_name'] = Category::find($request->category_id)->name;
        $input['key'] = Str::random(10);
        $input['datetime'] = $datetime;


        if (News::create($input)) {
            return redirect()->route('news.index')->with('success', 'news Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return response()->json([
            'status' => true,
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $category = Category::all();
        return view('admin.pages.news.edit', compact('news', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $input = $request->all();
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['image'] = asset('') . $filelink;
        } else {
            unset($input['image']);
        }

        if ($img = $request->file('primary_image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        } else {
            unset($input['primary_image']);
        }

        if ($img = $request->file('social_image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        } else {
            unset($input['social_image']);
        }
        $input['category_name'] = Category::find($request->category_id)->name;
        if (!$news->key) {
            $input['key'] = Str::random(10);
        }
        if ($news->update($input)) {
            return redirect()->route('news.index')->with('success', 'news Updated successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if ($news->delete()) {
            return redirect()->route('news.index')->with('success', 'news deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }


    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $request, News $news)
    {
        if ($news->update(['status' => 1])) {
            return redirect()->route('news.index')->with('success', 'news Activated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Request $request, News $news)
    {
        if ($news->update(['status' => 0])) {
            return redirect()->route('news.index')->with('success', 'news Deactivated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
