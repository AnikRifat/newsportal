@extends('front.layouts.app')
@section('meta')
<title>{{ $categoryname }}</title>
@endsection
@section('content')

<div class="top-section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $categoryname }}</h2>
                        <div class="row top-sec-middle my-5">
                            @foreach ($items as $item)
                            <div class="col-md-4 col-6 p-1 cat-section-content">
                                <a href="{{ route('news',$item->id) }}">
                                    <div class="featured-img">
                                        <img src="{{ $item->image }}" alt="mpnews">
                                    </div>
                                    <h3 class="featured-post-title">{{ $item->title }}</h3>

                                    <p class="featured-post-subtitle">{{ $item->subtitle }}</p>

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
