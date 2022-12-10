<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categories', function () {
});
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{news}', [NewsController::class, 'show']);

Route::get('/category', [ApiController::class, 'category']);
Route::get('/{categoryName}/{newsKey}', [ApiController::class, 'news']);

// Route::get('/category/{category}', [CategoryController::class, 'show']);
