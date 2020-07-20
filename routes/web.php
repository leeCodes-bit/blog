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

Route::get('/', 'PagesController@home');
Route::get('/blog', 'PagesController@blog');
Route::get('/login', 'PagesController@login');
Route::get('/signup', 'PagesController@signup');
Route::get('/contact', 'PagesController@contact');
// Route::post('/store', 'PagesController@store')->name('posts.store');
Route::resource('/posts', 'PostsController');

