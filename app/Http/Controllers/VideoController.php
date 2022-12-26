<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class VideoController extends Controller
{


    public function video()
    {
        $videos = Video::where('status', 1)->orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'video' => $videos,
        ]);
    }
    public function videoDetails($key)
    {
        $video = Video::where('key', $key)->get();

        return response()->json([
            'status' => true,
            'video' => $video,
        ]);
    }
    public function leatestVideo()
    {
        $video = Video::where('status', 1)->orderBy('id', 'DESC')->take(20)->get();

        return response()->json([
            'status' => true,
            'video' => $video,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('id', 'DESC')->get();

        return view('admin.pages.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd();
        return view('admin.pages.video.create');
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
            'title',
            'content',
            'thumbnail',
            'link',
        ]);
        $video_id = '#mp-' . date('YmdHis');
        $datetime = bangla_date(time(), "en");

        $input = $request->all();
        if ($img = $request->file('thumbnail')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/video/';
            $setImage = 'mpvideo_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['thumbnail'] = asset('') . $filelink;
            // dd($input['thumbnail']);
        }

        if ($img = $request->file('thumbnail')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            $image->insert($mask);
            $image->insert($mask, 'bottom', 50, 0);
            $filePath = 'uploads/images/video/';
            $setImage = 'mpvideo_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        }

        $input['video_id'] = $video_id;

        $input['key'] = Str::random(10);
        $input['datetime'] = $datetime;


        if (Video::create($input)) {
            return redirect()->route('video.index')->with('success', 'video Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return response()->json([
            'status' => true,
            'video' => $video,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {

        return view('admin.pages.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title',
            'content',
        ]);
        $input = $request->all();
        if ($img = $request->file('thumbnail')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/video/';
            $setImage = 'mpvideo_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['thumbnail'] = asset('') . $filelink;
        } else {
            unset($input['thumbnail']);
        }

        if ($img = $request->file('primary_image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/video/';
            $setImage = 'mpvideo_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        } else {
            unset($input['primary_image']);
        }

        if ($img = $request->file('thumbnail')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            // $img->insert($mask->social, 'bottom');
            $image->insert($mask);
            $image->insert($mask, 'bottom', 50, 0);
            $filePath = 'uploads/images/video/';
            $setImage = 'mpvideo_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        } else {
            unset($input['social_image']);
        }
        if (!$video->key) {
            $input['key'] = Str::random(10);
        }
        if ($video->update($input)) {
            return redirect()->route('video.index')->with('success', 'video Updated successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if ($video->delete()) {
            return redirect()->route('video.index')->with('success', 'video deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }


    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $request, Video $video)
    {
        if ($video->update(['status' => 1])) {
            return redirect()->route('video.index')->with('success', 'video Activated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Request $request, Video $video)
    {
        if ($video->update(['status' => 0])) {
            return redirect()->route('video.index')->with('success', 'video Deactivated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
