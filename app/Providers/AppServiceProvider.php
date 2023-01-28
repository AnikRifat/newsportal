<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\Photo;
use App\Models\Sponsor;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Website;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $content = Website::find(1);
        View::share('content', $content);

        $sponsor = Sponsor::find(1);
        View::share('sponsor', $sponsor);

        $tags = Tag::where('status', 1)->get();
        View::share('tags', $tags);

        $photos = Photo::where('status', 1)->orderBy('id', 'DESC')->get();
        View::share('photos', $photos);

        $slicedphotos = Photo::where('status', 1)->take(5)->orderBy('id', 'DESC')->get();
        View::share('slicedphotos', $slicedphotos);

        $videos = Video::where('status', 1)->orderBy('id', 'DESC')->get();
        View::share('videos', $videos);

        $slicedvideos = Video::where('status', 1)->take(5)->orderBy('id', 'DESC')->get();
        View::share('slicedvideos', $slicedvideos);


        $randvideos = Video::where('status', 1)->inRandomOrder()->take(5)->orderBy('id', 'DESC')->get();
        View::share('randvideos', $randvideos);

        $randphotos = Photo::where('status', 1)->inRandomOrder()->take(5)->orderBy('id', 'DESC')->get();
        View::share('randphotos', $randphotos);

        $slicedtags = Tag::where('status', 1)->take(5)->orderBy('id', 'DESC')->get();
        View::share('slicedtags', $slicedtags);
        if (Category::where('status', 1)->get()) {
            $categoiesSec = Category::where('status', 1)->get();
            View::share('categoiesSec', $categoiesSec);
        }



        $leatestNews = News::where('status', 1)->take(8)->orderBy('id', 'DESC')->get();
        View::share('leatestNews', $leatestNews);

        $leatestNews1 = News::where('status', 1)->take(4)->orderBy('id', 'DESC')->get();
        View::share('leatestNews1', $leatestNews1);

        $leatestNews2 = News::where('status', 1)->inRandomOrder()->take(4)->orderBy('id', 'DESC')->get();
        View::share('leatestNews2', $leatestNews2);

        $mostread = News::where('status', 1)->inRandomOrder()->take(8)->orderBy('id', 'DESC')->get();
        View::share('mostread', $mostread);


        $topnews = News::where('status', 1)->orderBy('id', 'DESC')->first();
        View::share('topnews', $topnews);

        $randitems = News::where('status', 1)->orderBy('id', 'DESC')->take(9)->where('id', '<', $topnews->id)->get();
        View::share('randitems', $randitems);


        $slicedCat = Category::where('status', 1)->take(14)->get();
        View::share('slicedCat', $slicedCat);


        $topphoto = Photo::where('status', 1)->take(6)->orderBy('id', 'DESC')->get();
        View::share('topphoto', $topphoto);

        $topvideo = Video::where('status', 1)->take(6)->orderBy('id', 'DESC')->get();
        View::share('topvideo', $topvideo);
    }
}
