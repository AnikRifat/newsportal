<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/category/{category}', [PublicController::class, 'category'])->name('category');
Route::get('/news/{news}', [PublicController::class, 'news'])->name('news');



Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.index');
    })->name('admin.index');
    Route::middleware('admin')->group(function () {

        //author-routes....
        Route::get('/author/index', [AuthorController::class, 'index'])->name('author.index');
        Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
        Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
        Route::get('/author/edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
        Route::put('/author/update/{author}', [AuthorController::class, 'update'])->name('author.update');
        Route::get('/author/destroy/{author}', [AuthorController::class, 'destroy'])->name('author.destroy');

        //photo-routes....
        Route::get('/photo/index', [PhotoController::class, 'index'])->name('photo.index');
        Route::get('/photo/create', [PhotoController::class, 'create'])->name('photo.create');
        Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store');
        Route::get('/photo/edit/{photo}', [PhotoController::class, 'edit'])->name('photo.edit');
        Route::put('/photo/update/{photo}', [PhotoController::class, 'update'])->name('photo.update');
        Route::get('/photo/destroy/{photo}', [PhotoController::class, 'destroy'])->name('photo.destroy');
        Route::get('/photo/active/{photo}', [PhotoController::class, 'active'])->name('photo.active');
        Route::get('/photo/inactive/{photo}', [PhotoController::class, 'inactive'])->name('photo.inactive');

        //video-routes....
        Route::get('/video/index', [VideoController::class, 'index'])->name('video.index');
        Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
        Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
        Route::get('/video/edit/{video}', [VideoController::class, 'edit'])->name('video.edit');
        Route::put('/video/update/{video}', [VideoController::class, 'update'])->name('video.update');
        Route::get('/video/destroy/{video}', [VideoController::class, 'destroy'])->name('video.destroy');
        Route::get('/video/active/{video}', [VideoController::class, 'active'])->name('video.active');
        Route::get('/video/inactive/{video}', [VideoController::class, 'inactive'])->name('video.inactive');




        //Category-routes....
        Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('/category/active/{category}', [CategoryController::class, 'active'])->name('category.active');
        Route::get('/category/inactive/{category}', [CategoryController::class, 'inactive'])->name('category.inactive');


        //news-admin-routes
        Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('/news/destroy/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
        Route::get('/news/active/{news}', [NewsController::class, 'active'])->name('news.active');
        Route::get('/news/inactive/{news}', [NewsController::class, 'inactive'])->name('news.inactive');

        //breakingnews-routes....

        Route::get('/breakingNews/index', [BreakingNewsController::class, 'index'])->name('breakingNews.index');
        Route::get('/breakingNews/create', [BreakingNewsController::class, 'create'])->name('breakingNews.create');
        Route::get('/breakingNews/edit/{breakingNews}', [BreakingNewsController::class, 'edit'])->name('breakingNews.edit');
        Route::post('/breakingNews/store', [BreakingNewsController::class, 'store'])->name('breakingNews.store');
        Route::get('/breakingNews/destroy/{breakingNews}', [BreakingNewsController::class, 'destroy'])->name('breakingNews.destroy');
        Route::get('/breakingNews/active/{breakingNews}', [BreakingNewsController::class, 'active'])->name('breakingNews.active');
        Route::get('/breakingNews/inactive/{breakingNews}', [BreakingNewsController::class, 'inactive'])->name('breakingNews.inactive');



        //website-settings route
        Route::get('/website', [WebsiteController::class, 'index'])->name('website.index');
        Route::put('/website/update/{website}', [WebsiteController::class, 'update'])->name('website.update');

        //contact-settings route
        Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact.index');
        Route::put('/contact/update/{website}', [WebsiteController::class, 'contactUpdate'])->name('contact.update');

        //sponsor-settings route
        Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor.index');
        Route::put('/sponsor/update/{sponsor}', [SponsorController::class, 'Update'])->name('sponsor.update');
    });



    //news-routes....

    Route::get('/news/index', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/pending', [NewsController::class, 'pending'])->name('news.pending');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
