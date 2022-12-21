<?php

namespace App\Http\Controllers;

use App\Models\BreakingNews;
use App\Models\Category;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class BreakingNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breakingNews = BreakingNews::orderBy('id', 'DESC')->get();

        return view('admin.pages.breakingNews.index', compact('breakingNews'));
    }

    /**
     * Show the form for creating aBreakingNewsresource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.breakingNews.create', compact('category'));
    }

    /**
     * Store aBreakingNewsy created resource in storage.
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
        $breakingNews_id = '#mp-' . date('YmdHis');
        $datetime = bangla_date(time(), "en");

        $input = $request->all();
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/breakingNews/';
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
            $filePath = 'uploads/images/breakingNews/';
            $setImage = 'mpnews_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        }
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            $image->insert($mask);
            $filePath = 'uploads/images/breakingNews/';
            $setImage = 'mpnews_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        }

        $input['news_id'] = $breakingNews_id;

        $input['category_name'] = Category::find($request->category_id)->name;
        $input['key'] = Str::random(10);
        $input['datetime'] = $datetime;


        if (BreakingNews::create($input)) {
            return redirect()->route('breakingNews.index')->with('success', 'news Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function show(BreakingNews $breakingNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function edit(BreakingNews $breakingNews)
    {
        $category = Category::all();
        return view('admin.pages.breakingNews.edit', compact('news', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BreakingNews $breakingNews)
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
            $filePath = 'uploads/images/breakingNews/';
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
            $filePath = 'uploads/images/breakingNews/';
            $setImage = 'mpnews_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        } else {
            unset($input['primary_image']);
        }

        if (!$breakingNews->social_image) {
            $img = $breakingNews->image;
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            $image->insert($mask);
            $filePath = 'uploads/images/breakingNews/';
            $setImage = 'mpnews_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        }

        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            $image->insert($mask);
            $filePath = 'uploads/images/breakingNews/';
            $setImage = 'mpnews_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        } else {
            unset($input['social_image']);
        }
        $input['category_name'] = Category::find($request->category_id)->name;
        if (!$breakingNews->key) {
            $input['key'] = Str::random(10);
        }
        if ($breakingNews->update($input)) {
            return redirect()->route('breakingNews.index')->with('success', 'news Updated successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(BreakingNews $breakingNews)
    {
        if ($breakingNews->delete()) {
            return redirect()->route('breakingNews.index')->with('success', 'news deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }


    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $request, BreakingNews $breakingNews)
    {
        if ($breakingNews->update(['status' => 1])) {
            return redirect()->route('breakingNews.index')->with('success', 'news Activated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BreakingNews  $breakingNews
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Request $request, BreakingNews $breakingNews)
    {
        if ($breakingNews->update(['status' => 0])) {
            return redirect()->route('breakingNews.index')->with('success', 'news Deactivated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
