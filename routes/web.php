<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('pages.index');
});


//Category-routes....

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


//news-routes....

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::get('/news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
Route::get('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
Route::get('/news/destroy/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
