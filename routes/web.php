<?php

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/create', 'PostController@create')->name('post.create');
Route::post('/store', 'PostController@store')->name('post.store');
Route::any('/destroy/{id}', 'PostController@destroy')->name('post.destroy');
