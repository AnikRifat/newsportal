@extends('front.layouts.app')
@section('meta')
<title>{{ $item->title }}</title>
<meta name="description" content="{{ $item->title }}" />
<meta property="og:title" content="{{ $item->title }}" />
<meta property="og:description" content="{{ $item->title }}" />
<meta name="twitter:title" content="{{ $item->title }}" />
<meta name="twitter:description" content="{{ $item->title }}" />
<meta property="og:image" content="{{ $item->social_image }}" />
<meta name="twitter:image" content="{{ $item->social_image }}" />
<meta name="twitter:image:src" content="{{ $item->social_image }}" />
@endsection
@section('content')
<section class="wp-news_single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 pb-4">
                        <div class="wp-news_post-date">
                            <i class="fas fa-user"><span>{{ $item->reporter }}</span></i>
                            <i class="far fa-clock"><span>{{ $item->datetime }}</span></i>
                            <i class="fas fa-print"></i>
                        </div>
                        <!--/.wp-news_post-date-->
                        <div class="wp-news_single-content">
                            <div class="post-image ">
                                <p class="post-image-details">{{ $item->title }}</p>
                                {{-- <span>{{ $item->datetime }}</span> --}}
                                <div class="text-center">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $item->link }}" id="video"
                                          allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>

                                </div>
                                @if($item->caption)
                                <p class="bg-light text-dark">
                                    {{ $item->caption }}
                                </p>
                                @endif
                                <a href="{{ $sponsor->side_2_link }}">
                                    <img src="{{ $sponsor->side_2 }}" class="w-100" alt="">
                                </a>
                                {{-- @if($item->primary_image)
                                <img src="{{ $item->primary_image }}" alt="wpnews"
                                class="max-auto img-fluid img-thumbnail">

                                @endif --}}
                            </div>
                            <p>
                                {!! $item->content !!}
                            </p>
                            {{-- <div class="single-post-share">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-pinterest-p"></i>
                                <i class="fas fa-print"></i>
                            </div> --}}
                            <!--/.single-post-share-->
                            <div class="single-post-comments">
                            </div>
                            <!--/.single-post-comments-->
                        </div>

                        <!--/.single-post_more-post-->
                    </div>
                    <!--/.col-md-12-->
                    <div class="col-md-12">

                    </div>
                    <!--/.col-md-12-->

                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h2 class="McatTitle"><span class="eee"> সর্বশেষ - ভিডিও গ্যালারী</span></h2>
                    <div class="single-block">
                        <div class="details with-icon">

                            {{-- @php
                            $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                            'DESC')->take(6)->get();
                            @endphp --}}
                            @foreach ($slicedvideos as $item)
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="{{ route('videodetails',$item->id) }}">
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
                    <h2 class="McatTitle position-relative w-100"><span class="eee"> সর্বোচ্চ পঠিত - ভিডিও গ্যালারী
                        </span></h2>
                    <div class="single-block">
                        <div class="details with-icon">

                            {{-- @php
                            $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                            'DESC')->take(6)->get();
                            @endphp --}}

                            <div class="row">
                                @foreach ($randvideos as $item)
                                <div class="col-md-6">
                                    <div class="small-thumb">
                                        <a href="{{ route('videodetails',$item->id) }}">
                                            <img loading="lazy" src="{{ $item->thumbnail }}" alt="{{ $item->title }}"
                                              style="width:100%;">
                                        </a>
                                        <h4>
                                            <a href="{{ route('videodetails',$item->id) }}">{{ $item->title }}</a>
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
                    <h2 class="McatTitle position-relative w-100"><span class="eee"> এম পি নিউজে সর্বশেষ</span></h2>
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
                                            <img loading="lazy" src="{{ $item->image }}" alt="{{ $item->title }}"
                                              style="width:100%;">
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

    </div>
</section>
@endsection
