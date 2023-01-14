@extends('front.layouts.app')
@section('meta')
<title>ছবি গ্যালারী</title>
@endsection
@section('content')
<div class="top-section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="McatTitle position-relative w-100"><span class="eee"> ছবি গ্যালারী</span></h2>
                        <div class="row top-sec-middle my-5">
                            @foreach ($photos as $item)
                            <div class="col-md-3 col-6 p-1 cat-section-content">
                                <a href="{{ route('photodetails',$item->id) }}">
                                    <div class="featured-img">
                                        <img src="{{ $item->image }}" alt="mpnews">
                                    </div>
                                    <h3 class="featured-post-title">{{ $item->title }}</h3>

                                    {{-- <p class="featured-post-subtitle">{{ $item->subtitle }}</p>
                                    --}}

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h2 class="McatTitle"><span class="eee"> সর্বশেষ </span></h2>
                            <div class="single-block">
                                <div class="details with-icon">

                                    {{-- @php
                                    $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                                    'DESC')->take(6)->get();
                                    @endphp --}}
                                    @foreach ($leatestNews1 as $item)
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="{{ route('news',$item->id) }}">
                                                    <i class="fa fa-angle-double-right"></i>
                                                    {{ $item->title }}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <a href="{{ $sponsor->side_1_link }}">
                            <img src="{{ $sponsor->side_1 }}" alt="wpnews" class="img-fluid img-thumbnail">
                        </a>
                        <div>
                            <h2 class="McatTitle position-relative w-100"><span class="eee"> সর্বোচ্চ পঠিত </span></h2>
                            <div class="single-block">
                                <div class="details with-icon">

                                    {{-- @php
                                    $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                                    'DESC')->take(6)->get();
                                    @endphp --}}

                                    <div class="row">
                                        @foreach ($leatestNews2 as $item)
                                        <div class="col-md-6">
                                            <div class="small-thumb">
                                                <a href="{{ route('news',$item->id) }}">
                                                    <img loading="lazy" src="{{ $item->image }}"
                                                      alt="{{ $item->title }}" style="width:100%;">
                                                </a>
                                                <h4>
                                                    <a href="{{ route('news',$item->id) }}">{{ $item->title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <h2 class="McatTitle position-relative w-100"><span class="eee"> এম পি নিউজে সর্বশেষ</span>
                            </h2>
                            <div class="single-block">
                                <div class="details with-icon">

                                    {{-- @php
                                    $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                                    'DESC')->take(6)->get();
                                    @endphp --}}

                                    <div class="row">
                                        @foreach ($leatestNews as $item)
                                        <div class="col-md-3">
                                            <div class="small-thumb">
                                                <a href="{{ route('news',$item->id) }}">
                                                    <img loading="lazy" src="{{ $item->image }}"
                                                      alt="{{ $item->title }}" style="width:100%;">
                                                </a>
                                                <h4>
                                                    <a href="{{ route('news',$item->id) }}">{{ $item->title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--col-md-->
        </div>
    </div>
</div>
@endsection
