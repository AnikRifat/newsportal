@extends('front.layouts.app')
@section('meta')
<title>{{ $item->title }}</title>
<meta name="description" content="{{ $item->title }}" />
<meta property="og:title" content="{{ $item->title }}" />
<meta property="og:description" content="{{ $item->title }}" />
<meta name="twitter:title" content="{{ $item->title }}" />
<meta name="twitter:description" content="{{ $item->title }}" />
<meta property="og:image" content="{{ $item->image }}" />
<meta name="twitter:image" content="{{ $item->image }}" />
<meta name="twitter:image:src" content="{{ $item->image }}" />
@endsection
@section('content')
<section class="wp-news_single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 pb-4">
                        <div class="wp-news_post-date">
                            <i class="fas fa-user"><span>ডেস্ক</span></i>
                            <i class="far fa-clock"><span>{{ $item->datetime }}</span></i>
                            <i class="fas fa-print"></i>
                        </div>
                        <!--/.wp-news_post-date-->
                        <div class="wp-news_single-content">
                            <div class="post-image ">
                                <img src="{{ $item->image }}" alt="wpnews" class="max-auto img-fluid img-thumbnail">
                                <p class="post-image-details">{{ $item->title }}</p>
                                @if($item->primary_image)
                                <img src="{{ $item->primary_image }}" alt="wpnews"
                                  class="max-auto img-fluid img-thumbnail">

                                @endif
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
                        <!--/..wp-news_single-content-->
                        <!-- <div class="single-post_more-posts">
                <div class="row">
                  <div class="col-md-12 p-1">
                    <h2 class="single-post_more-title">প্রথম পাতা থেকে</h2>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 p-1">
                    <div class="single-post_more-post">
                      <a href="news.html">
                        <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                        <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3>
                      </a>
                    </div>
                  </div>
                </div>

              </div> -->
                        <!--/.single-post_more-post-->
                    </div>
                    <!--/.col-md-12-->
                    <div class="col-md-12">

                    </div>
                    <!--/.col-md-12-->

                </div>
            </div>

        </div>
    </div>

    </div>
</section>
@endsection
