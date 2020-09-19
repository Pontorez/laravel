<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TagController;
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

Route::get('/', [NewsController::class, 'index']);

Route::resource('news', NewsController::class);
Route::delete('news/{news}/delete', [NewsController::class, 'destroy']);

Route::resource('category', CategoryController::class);
Route::get('category/{category}/delete', [CategoryController::class, 'destroy']);

Route::resource('tag', TagController::class);
Route::get('tag/{tag}/delete', [TagController::class, 'destroy']);

Route::resource('comment', CommentController::class);
Route::get('comment/{comment}/delete', [CommentController::class, 'destroy']);
