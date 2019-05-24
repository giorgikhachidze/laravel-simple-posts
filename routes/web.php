<?php

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/create', 'PostController@create')->name('post.create');
Route::post('/store', 'PostController@store')->name('post.store');
Route::post('/delete', 'PostController@destroy')->name('post.destroy');
