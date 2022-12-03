<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('pages.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd();
        return view('pages.news.create');
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
            $input['image'] = asset('') . $filePath . $setImage;
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
            $input['image'] = asset('') . $filePath . $setImage;
        }
        if ($img = $request->file('secondary_image')) {
            $image = Image::make($img)->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/news/';
            $setImage = 'mpnews_secondary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['image'] = asset('') . $filePath . $setImage;
        }

        $input['news_id'] = $news_id;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('pages.news.edit', compact('news'));
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
        //
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
