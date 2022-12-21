<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsor = Sponsor::find(1);
        return view('admin.pages.setting.sponsor', compact('sponsor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $input = $request->all();

        if ($img = $request->file('top')) {
            $image = Image::make($img)->resize(1500, 444, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/sponsor/';
            $setImage = 'mpnews_image_top' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 95);
            $input['top'] = asset('') . $filelink;
        } else {
            unset($input['top']);
        }
        if ($img = $request->file('side_1')) {
            $image = Image::make($img)->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/sponsor/';
            $setImage = 'mpnews_image_side_1' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 95);
            $input['side_1'] = asset('') . $filelink;
        } else {
            unset($input['side_1']);
        }
        if ($img = $request->file('side_2')) {
            $image = Image::make($img)->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/sponsor/';
            $setImage = 'mpnews_image_side_2' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 95);
            $input['side_2'] = asset('') . $filelink;
        } else {
            unset($input['side_2']);
        }
        if ($img = $request->file('bottom')) {
            $image = Image::make($img)->resize(1500, 444, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/sponsor/';
            $setImage = 'mpnews_image_bottom' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 95);
            $input['bottom'] = asset('') . $filelink;
        } else {
            unset($input['bottom']);
        }
        if ($img = $request->file('social')) {
            $image = Image::make($img)->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $filePath = 'uploads/images/sponsor/';
            $setImage = 'mpnews_image_social' . date('YmdHis') . "." . $img->getClientOriginalExtension();
            $filelink = $filePath . $setImage;
            $image->save($filelink, 95);
            $input['social'] = asset('') . $filelink;
        } else {
            unset($input['social']);
        }
        // dd($sponsor->update($input));
        if ($sponsor->update($input)) {

            return redirect()->route('sponsor.index')->with('success', 'sponsor edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}
