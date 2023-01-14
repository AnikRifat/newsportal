@extends('front.layouts.app')
@section('meta')
<title>ভিডিও গ্যালারী</title>
@endsection
@section('content')
<div class="top-section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="McatTitle position-relative w-100"><span class="eee"> ভিডিও গ্যালারী </span>
                        </h2>

                        <div class="row top-sec-middle my-5">
                            @foreach ($videos as $item)
                            <div class="col-md-4 col-6 p-1">

                                <div class="wp-news_video-item video-btn" data-toggle="modal"
                                  data-src="{{ $item->link }}" data-target="#myModal{{ $item->id }}">

                                    <div class="featured-img vide-post-img">
                                        <img src="{{ $item->thumbnail }}" alt="mpnews" class="img-fluid img-thumbnail">
                                        <span><i class="video-post-icon fas fa-video"></i></span>
                                    </div>
                                    <a href="{{ route('videodetails',$item->id) }}">

                                        <h3 class="featured-post-details-sm"> {{ $item->title }}</h3>
                                    </a>

                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        @foreach ($videos as $item)
                        <!-- start video gallery Modal -->
                        <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <i class="fa fa-times"></i>
                            </button>

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">


                                    <div class="modal-body">

                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{ $item->link }}" id="video"
                                              allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>


                                    </div>
                                    <a href="{{ route('videodetails',$item->id) }}">আরো পড়ুন</a>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>

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
            <!--col-md-->
        </div>
    </div>
</div>
@endsection
