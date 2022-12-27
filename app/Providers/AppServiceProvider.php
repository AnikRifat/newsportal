<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\Photo;
use App\Models\Sponsor;
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

        $categoiesSec = Category::all();
        View::share('categoiesSec', $categoiesSec);

        $leatestNews = News::take(7)->orderBy('id', 'DESC')->get();
        View::share('leatestNews', $leatestNews);

        $randitems = News::inRandomOrder()->take(9)->orderBy('id', 'DESC')->get();
        View::share('randitems', $randitems);

        $topnews = News::take(1)->orderBy('id', 'DESC')->get();
        View::share('topnews', $topnews);

        $slicedCat = Category::take(9)->get();
        View::share('slicedCat', $slicedCat);


        $topphoto = Photo::take(6)->orderBy('id', 'DESC')->get();
        View::share('topphoto', $topphoto);

        $topvideo = Video::take(6)->orderBy('id', 'DESC')->get();
        View::share('topvideo', $topvideo);
    }
}
