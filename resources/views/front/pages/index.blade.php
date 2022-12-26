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
                                    <img class="img-thumbnail" src="{{ $item->image }}" alt="wpnews">
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
                                            <img class="img-thumbnail" src="{{ $item->image }}" alt="wpnews">
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
                            <img src="{{ $sponsor->side_1 }}" class="w-100" alt="mpnews">
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
                                                <div class="tab-thumbs-wpnews">
                                                    <img class="img-fluid img-thumbnail" src="{{ $item->image }}"
                                                      alt="wpnews">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-xl-7 col-md-6 col-8 pl-0">
                                                <div class="tab-title-wpnews">
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
                                                <div class="tab-thumbs-wpnews">
                                                    <img class="img-fluid img-thumbnail" src="{{ $item->image }}"
                                                      alt="wpnews">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-xl-7 col-md-6 col-8 pl-0">
                                                <div class="tab-title-wpnews">
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
                        <div class="col-md-12">
                            <img src="{{ $sponsor->side_2 }}" class="w-100" alt="mpnews">
                        </div>
                    </div>

                </div>
                <!--col-md-->
                @foreach ($categoiesSec as $item)
                <div class="col-xl-12 col-md-12">
                    <div class="categories-sec">

                        <div class="row">

                            <div class="col-md-12 p-1">
                                <h2 class="cat-title">{{ $item->name }}</h2>
                            </div>
                            @php
                            $newsItemsCat = App\Models\News::where('category_id',$item->id)->take(6)->get();
                            @endphp
                            @foreach ($newsItemsCat as $catitem)
                            <div class="col-md-4 col-6 p-1 cat-section-content">
                                <a href="{{ route('news',$item->id) }}">
                                    <div class="featured-img">
                                        <img src="{{ $catitem->image }}" alt="wpnews">
                                    </div>
                                    <h3 class="featured-post-title">{{ $catitem->title }}</h3>
                                </a>
                            </div>
                            @endforeach


                        </div>

                    </div>
                    <!--/categories-sec-tow-->
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection
