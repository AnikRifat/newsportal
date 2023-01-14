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
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" class="mx-2 ">

                                <i class="fab fa-facebook text-primary"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" class="mr-2">

                                <i class="fab fa-twitter text-info"></i>
                            </a>
                            <a href="#" class="mr-2">

                                <i class="fab fa-whatsapp text-success"></i>
                            </a>
                            <a href="#" class="mr-2">

                                <i class="fab fa-youtube text-danger"></i>
                            </a>
                            <a href="#" class="mr-2">

                                <i class="fab fa-linkedin text-primary"></i>
                            </a>
                        </div>
                        <!--/.wp-news_post-date-->
                        <div class="wp-news_single-content">
                            <div class="post-image ">
                                <p class="post-image-details">{{ $item->title }}</p>
                                {{-- <span>{{ $item->datetime }}</span> --}}
                                <div class="text-center">
                                    <img src="{{ $item->image }}" alt="wpnews" class="img-fluid img-thumbnail">

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
                                <h2 class="McatTitle position-relative w-100"><span class="eee"> মন্তব্য পড়ুন</span>
                                </h2>
                                <div>
                                    <ul class="list-group">

                                        @foreach ($comments as $items)
                                        <li class="list-group-item">
                                            <h5 class="font-weight-bold">{{ $items->name }}</h5>
                                            <p>{{ $items->comment }}</p>
                                        </li>
                                        @endforeach

                                        {{-- Cras justo odio</li> --}}

                                    </ul>

                                </div>
                                <div class="commentSectionDiv" style="margin-bottom: 10px">
                                    <p class="cardHeader" style="margin-top: 20px;border-bottom: 10px solid #d9d9d9;">
                                        <span>মন্তব্য করুন </span>
                                    </p>

                                    <div class="panel-body mt-3">
                                        <div class="comment_displaymessage"></div>
                                        <div class="clearfix"></div>
                                        <form id="cmtForm" action="{{ route('comment.store') }}" method="post">
                                            @csrf
                                            <input type="text" name="news_key" value="{{ $item->key }}" hidden>
                                            <div class="form-group">
                                                <label for="Name" class="col-xs-12 col-sm-3">নাম<em>*</em> </label>
                                                <div class="col-xs-12 col-sm-9"><input type="text" name="name"
                                                      class="form-control" value="" placeholder="নাম" required=""></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-xs-12 col-sm-3">ইমেইল<em>*</em></label>
                                                <div class="col-xs-12 col-sm-9"><input type="email" name="email"
                                                      value="" class="form-control" id="exampleInputPassword1"
                                                      placeholder="ইমেইল" required=""></div>
                                            </div>

                                            <div class="form-group">
                                                <label for="comment"
                                                  class="col-xs-12 col-sm-3">মন্তব্য<em>*</em></label>
                                                <div class="col-xs-12 col-sm-9">
                                                    <textarea name="comment" id="comment" class="form-control"
                                                      cols="100" rows="8"
                                                      placeholder="এখানে আপনি আপনার মন্তব্য  করতে পারেন"
                                                      required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="comment_submit">

                                                <div class="col-xs-12 col-sm-9">
                                                    <button type="submit" class="btn btn-primary">সাবমিট </button>
                                                    <input type="reset" id="frmRest" value="Reset"
                                                      style="visibility: hidden;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
            <div class="col-md-4">
                <div>
                    <h2 class="McatTitle"><span class="eee"> সর্বশেষ - {{ $item->category_name }}</span></h2>
                    <div class="single-block">
                        <div class="details with-icon">

                            {{-- @php
                            $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                            'DESC')->take(6)->get();
                            @endphp --}}
                            @foreach ($newsItemsCat as $item)
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
                    <h2 class="McatTitle position-relative w-100"><span class="eee"> সর্বোচ্চ পঠিত -
                            {{ $item->category_name }}</span></h2>
                    <div class="single-block">
                        <div class="details with-icon">

                            {{-- @php
                            $newsItemsCat = App\Models\News::where('category_id',$item->catgeory_id)->orderBy('id',
                            'DESC')->take(6)->get();
                            @endphp --}}

                            <div class="row">
                                @foreach ($newsItemsCat2 as $item)
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
