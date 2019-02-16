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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@index');
Route::get('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Route::resource('/comments','CommentsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
