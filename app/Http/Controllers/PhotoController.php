<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class PhotoController extends Controller
{


    public function photo()
    {
        $photos = Photo::where('status', 1)->orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'photo' => $photos,
        ]);
    }
    public function photoDetails($key)
    {
        $photo = Photo::where('key', $key)->get();

        return response()->json([
            'status' => true,
            'photo' => $photo,
        ]);
    }
    public function leatestPhoto()
    {
        $photo = Photo::where('status', 1)->orderBy('id', 'DESC')->take(20)->get();

        return response()->json([
            'status' => true,
            'photo' => $photo,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderBy('id', 'DESC')->get();

        return view('admin.pages.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd();
        return view('admin.pages.photo.create');
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
            'image',
        ]);
        $photo_id = '#mp-' . date('YmdHis');
        $datetime = bangla_date(time(), "en");

        $input = $request->all();
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/photo/';
            $setImage = 'mpphoto_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['image'] = asset('') . $filelink;
            // dd($input['image']);
        }

        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            $image->insert($mask);
            $image->insert($mask, 'bottom', 50, 0);
            $filePath = 'uploads/images/photo/';
            $setImage = 'mpphoto_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        }

        $input['photo_id'] = $photo_id;

        $input['key'] = Str::random(10);
        $input['datetime'] = $datetime;


        if (Photo::create($input)) {
            return redirect()->route('photo.index')->with('success', 'photo Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return response()->json([
            'status' => true,
            'photo' => $photo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {

        return view('admin.pages.photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title',
            'content',
        ]);
        $input = $request->all();
        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/photo/';
            $setImage = 'mpphoto_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
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
            $filePath = 'uploads/images/photo/';
            $setImage = 'mpphoto_primary_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['primary_image'] = asset('') . $filelink;
        } else {
            unset($input['primary_image']);
        }

        if ($img = $request->file('image')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mask = Sponsor::find(1)->social;
            // $img->insert($mask->social, 'bottom');
            $image->insert($mask);
            $image->insert($mask, 'bottom', 50, 0);
            $filePath = 'uploads/images/photo/';
            $setImage = 'mpphoto_social_image' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 50);
            $input['social_image'] = asset('') . $filelink;
        } else {
            unset($input['social_image']);
        }
        if (!$photo->key) {
            $input['key'] = Str::random(10);
        }
        if ($photo->update($input)) {
            return redirect()->route('photo.index')->with('success', 'photo Updated successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if ($photo->delete()) {
            return redirect()->route('photo.index')->with('success', 'photo deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }


    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function Active(Request $request, Photo $photo)
    {
        if ($photo->update(['status' => 1])) {
            return redirect()->route('photo.index')->with('success', 'photo Activated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Request $request, Photo $photo)
    {
        if ($photo->update(['status' => 0])) {
            return redirect()->route('photo.index')->with('success', 'photo Deactivated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
