@extends('front.layouts.app')
@section('meta')
<title>HomePage</title>
@endsection
@section('content')
<div class="top-section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row top-sec-middle my-5">
                            @foreach ($news as $item)
                            <div class="col-md-4 col-6 p-1">
                                <a href="{{ route('news',$item->id) }}">
                                    <div class="top-section-content featured-img">
                                        <img class="img-thumbnail" src="{{ $item->image }}" alt="wpnews">
                                    </div>
                                    <div class="my-1">
                                        <p class="featured-post-title">
                                            {{ $item->title }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <!--col-md-->
        </div>
    </div>
</div>
@endsection
