<?php

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

Route::get('/', 'NewsController@index');

Route::resource('news', 'NewsController');
Route::get('news/{news}/delete', 'NewsController@destroy');

Route::resource('category', 'CategoryController');
Route::get('category/{category}/delete', 'CategoryController@destroy');

Route::resource('tag', 'TagController');
Route::get('tag/{tag}/delete', 'TagController@destroy');

Route::resource('comment', 'CommentController');
Route::get('comment/{comment}/delete', 'CommentController@destroy');
