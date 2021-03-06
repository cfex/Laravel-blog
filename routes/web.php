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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::prefix('posts')->group(function () {
    Route::get('/', 'PostsController@index');
    Route::get('/create', 'PostsController@create');
    Route::post('/store', 'PostsController@store');
    Route::get('/{post}', 'PostsController@show');
    Route::post('/{post}/comments', 'CommentsController@store');
    Route::delete('/{post}', 'PostsController@destroy');
    Route::delete('/{comment}/comment', 'CommentsController@destroy');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'AdminDashboard@index');
		Route::get('/posts', 'AdminPosts@index');
    Route::get('/users', 'AdminUsers@index');
    Route::get('/{user}/profile', 'AdminUsers@show');
});
