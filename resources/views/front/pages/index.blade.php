@extends('front.layouts.app')
@section('meta')
<title>HomePage</title>
@endsection
@section('content')
<section>

    <div class="top-section-one">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach ($topnews as $item)
                        <div class="col-xl-12 col-md-12  p-1">
                            <a href="{{ route('news',$item->id) }}">
                                <div class="top-section-big post-title-inside-box">
                                    <img class="img-thumbnail" src="{{ $item->image }}" alt="mpnews">
                                    <h3 class="featured-post-title post-title-inside-title">{{ $item->title }}</h3>
                                </div>
                            </a>
                        </div>
                        @endforeach


                        <div class="col-md-12">
                            <div class="row top-sec-middle">
                                @foreach ($randitems as $item)
                                <div class="col-md-4 col-6 p-1">
                                    <a href="{{ route('news',$item->id) }}">
                                        <div class="top-section-content featured-img">
                                            <img class="img-thumbnail" src="{{ $item->image }}" alt="mpnews">
                                        </div>
                                        <h3 class="featured-post-title">{{ $item->title }}</h3>
                                    </a>
                                </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ $sponsor->side_1 }}" class="w-100 m-3" alt="mpnews">
                        </div>
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active top-tab-title" data-toggle="tab" href="#awTab1">সর্বাধিক
                                        পঠিত</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-tab-title" data-toggle="tab" href="#awTab2"> সাম্প্রতিক
                                        খবর</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="awTab1" class="tab-pane active"><br>
                                    @foreach ($leatestNews as $item)
                                    <a href="{{ route('news',$item->id) }}">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6 col-4 margin-bt">
                                                <div class="tab-thumbs-mpnews">
                                                    <img class="img-fluid img-thumbnail" src="{{ $item->image }}"
                                                      alt="mpnews">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-xl-7 col-md-6 col-8 pl-0">
                                                <div class="tab-title-mpnews">
                                                    <h3>{{ $item->title }}</h3>
                                                </div>
                                            </div>
                                            <!--/.end content block-->
                                        </div>
                                    </a>
                                    @endforeach


                                </div>
                                <!--/.end first content-->
                                <div id="awTab2" class="tab-pane"><br>
                                    @foreach ($leatestNews as $item)
                                    <a href="{{ route('news',$item->id) }}">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6 col-4 margin-bt">
                                                <div class="tab-thumbs-mpnews">
                                                    <img class="img-fluid img-thumbnail" src="{{ $item->image }}"
                                                      alt="mpnews">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-xl-7 col-md-6 col-8 pl-0">
                                                <div class="tab-title-mpnews">
                                                    <h3>{{ $item->title }}</h3>
                                                </div>
                                            </div>
                                            <!--/.end content block-->
                                        </div>
                                    </a>
                                    @endforeach


                                </div>
                                <!--/.end second tab-->
                            </div>
                            <!--/..tab-content-->
                        </div>

                    </div>

                </div>
                <div class="col-md-12">
                    <img src="{{ $sponsor->side_2 }}" class="w-100 m-2" alt="mpnews">
                </div>
                <div class="col-md-12">
                    <div class="row categories-sec">
                        <div class="col-md-6 p-1">
                            <h2 class="cat-title">ফটো গ্যালারী</h2>
                            <div class="header-top-slider-area">

                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($topphoto as $item)
                                        <div class="swiper-slide">
                                            <div class="header-slider-container">
                                                <a href="#">
                                                    <img src="{{ $item->image }}" alt="mpnews" class="img-fluid w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block header-slider-content">
                                                <h5>{{ $item->title }}</h5>
                                                @if( $item->subtitle)

                                                <p>{{ $item->subtitle }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    {{-- <div class="swiper-pagination"></div> --}}
                                </div>
                                {{--



                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($topphoto as $item)
                                        <div class="swiper-slide">
                                            <div class="header-slider-container">
                                                <a href="#">
                                                    <img src="{{ $item->image }}" alt="mpnews">
                                </a>
                            </div>
                            <div class="carousel-caption d-none d-md-block header-slider-content">
                                <h5>{{ $item->title }}</h5>
                                @if( $item->subtitle)

                                <p>{{ $item->subtitle }}</p>
                                @endif
                            </div>
                        </div>
                        @endforeach


                    </div>


                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 p-1">
                    <h2 class="cat-title">ভিডিও গ্যালারী</h2>
                </div>
                @foreach ($topvideo as $item)
                <div class="col-md-6 p-1">

                    <div class="wp-news_video-item video-btn" data-toggle="modal" data-src="{{ $item->link }}"
                      data-target="#myModal{{ $item->id }}">

                        <div class="featured-img vide-post-img">
                            <img src="{{ $item->thumbnail }}" alt="mpnews" class="img-fluid img-thumbnail">
                            <span><i class="video-post-icon fas fa-video"></i></span>
                        </div>
                        <h3 class="featured-post-details-sm"> {{ $item->title }}</h3>

                    </div>
                </div>
                @endforeach



            </div>
            <!--/..video-gallery-->
        </div>
        <div class="col-md-12">
            @foreach ($topvideo as $item)
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
                                <iframe class="embed-responsive-item" src="{{ $item->link }}" id="video" allowfullscreen
                                  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>


                        </div>
                        <a href="post.html">আরো পড়ুন</a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
        <!-- /.video gallery Modal -->


    </div>
    </div>
    <!--col-md-->
    @foreach ($categoiesSec as $item)
    @if($item->news($item->id) > 0)
    <div class="col-xl-12 col-md-12">
        <div class="categories-sec">

            <div class="row">
                @php
                $newsItemsCat = App\Models\News::where('category_id',$item->id)->take(6)->get();
                @endphp

                <div class="col-md-12 p-1">
                    <h2 class="cat-title">{{ $item->name }}</h2>

                </div>

                @foreach ($newsItemsCat as $catitem)
                <div class="col-md-4 col-6 p-1 cat-section-content">
                    <a href="{{ route('news',$item->id) }}">
                        <div class="featured-img">
                            <img src="{{ $catitem->image }}" alt="mpnews">
                        </div>
                        <h3 class="featured-post-title">{{ $catitem->title }}</h3>
                    </a>
                </div>
                @endforeach

                <div class="col-md-12">
                    <a class="float-right bg-dark text-white" href="{{ route('category',$item->id) }}"
                      class="featured-more-posts">আরও খবর
                        &gt;&gt;</a>
                </div>

            </div>

        </div>
        <!--/categories-sec-tow-->
    </div>
    @endif



    @endforeach

    </div>
    </div>
    </div>
</section>
@endsection
