<?php

Route::get('/', 'NewsController@index');

Route::resource('news', 'NewsController');
Route::get('news/{news}/delete', 'NewsController@destroy');

Route::resource('category', 'CategoryController');
Route::get('category/{category}/delete', 'CategoryController@destroy');

Route::resource('tag', 'TagController');
Route::get('tag/{tag}/delete', 'TagController@destroy');

Route::resource('comment', 'CommentController');
Route::get('comment/{comment}/delete', 'CommentController@destroy');
