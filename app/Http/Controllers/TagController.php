<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.pages.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tags.create');
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
            'name' => 'required',
        ]);
        $input = $request->all();
        $input['key'] = Str::random(10);
        if (tag::create($input)) {
            return redirect()->route('tag.index')->with('success', 'tag Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $news = News::where('tag_name', $tag->name)->get();
        return response()->json([
            'status' => true,
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.pages.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $input = $request->all();
        if (!$tag->key) {
            $input['key'] = Str::random(10);
        }

        if ($tag->update($input)) {

            return redirect()->route('tag.index')->with('success', 'tag edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        // dd($tag->name);
        if (News::where('tag_name', $tag->name)->delete() && $tag->delete()) {
            return redirect()->route('tag.index')->with('success', 'tag deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }





    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $request, Tag $tag)
    {
        if ($tag->update(['status' => 1])) {
            return redirect()->route('tag.index')->with('success', 'tag Activated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Request $request, Tag $tag)
    {
        if ($tag->update(['status' => 0])) {
            return redirect()->route('tag.index')->with('success', 'tag Deactivated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
