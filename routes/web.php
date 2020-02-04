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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::post('image-upload', 'HomeController@UploadProfile')->name('image.upload.post');
Route::post('tweet', 'HomeController@storeTweet')->name('tweet.post');
Route::get('tweet/{id}', 'PostController@show')->name('tweet');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/follow', 'HomeController@follow')->name('follow');
Route::post('/unfollow', 'HomeController@unfollow')->name('unfollow');
Route::get('/profile', 'HomeController@profile')->name('profile');
