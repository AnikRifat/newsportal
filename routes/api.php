<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Resources\Category;
use App\Http\Resources\CategoryResource;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/category', [ApiController::class, 'category']);
Route::get('/category/{categoryName}', [ApiController::class, 'categoryItem']);
Route::get('/category/{categoryName}/{newsKey}', [ApiController::class, 'news']);

Route::get('/breakingNews', [ApiController::class, 'breakingNews']);
Route::get('/breakingNews/{key}', [ApiController::class, 'breakingNewsDetails']);


Route::get('/photo', [PhotoController::class, 'photo']);
Route::get('/leatest-photo', [PhotoController::class, 'leatestphoto']);
Route::get('/photo/{photokey}', [PhotoController::class, 'photoDetails']);


Route::get('/video', [VideoController::class, 'video']);
Route::get('/leatest-video', [VideoController::class, 'leatestvideo']);
Route::get('/video/{videokey}', [VideoController::class, 'videoDetails']);


Route::get('/news', [NewsController::class, 'news']);
Route::get('/leatest-news', [NewsController::class, 'leatestNews']);
Route::get('/news/{newskey}', [NewsController::class, 'newsDetails']);


Route::get('/menu', [ApiController::class, 'menu']);
Route::get('/website', [ApiController::class, 'website']);
Route::get('/sponsor', [ApiController::class, 'sponsor']);

Route::post('/comment/store', [CommentController::class, 'store']);
// Route::get('/category/{category}', [CategoryController::class, 'show']);
