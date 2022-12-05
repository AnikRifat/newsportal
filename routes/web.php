<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicController;
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


Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.index');
    });

    //Category-routes....
    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/active/{category}', [CategoryController::class, 'active'])->name('category.active');
    Route::get('/category/inactive/{category}', [CategoryController::class, 'inactive'])->name('category.inactive');

    //news-routes....

    Route::get('/news/index', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/news/destroy/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('/news/active/{news}', [NewsController::class, 'active'])->name('news.active');
    Route::get('/news/inactive/{news}', [NewsController::class, 'inactive'])->name('news.inactive');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
