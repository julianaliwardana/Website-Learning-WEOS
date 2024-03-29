<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/form-post', 'PostController@index')->name('form-post')->middleware('auth');;
Route::post('/form-post', 'PostController@store')->name('get-post')->middleware('auth');;
Route::get('/post', 'PostController@show')->name('list-post')->middleware('auth');;
Route::get('/view-post/{id}', 'PostController@detail')->name('view-post')->middleware('auth');;
Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post')->middleware('auth');;
Route::put('/update-post/{id}', 'PostController@update')->name('update-post')->middleware('auth');;
Route::delete('/delete-post/{id}', 'PostController@delete')->name('delete-post')->middleware('auth');;
Route::get('/my-post', 'PostController@mypost')->name('my-post')->middleware('auth');;
Route::post('/post/{id}', 'CommentController@store')->name('comment-post')->middleware('auth');;
Route::get('/roadmap', 'HomeController@roadmap')->name('show-roadmap')->middleware('auth');;
Route::post('/user/{user}', 'UserController@store')->name('create-profile');
Route::get('/create-profile', 'UserController@create')->middleware('auth');
Route::get('/user/profile/{id}', 'UserController@showProfile')->middleware('auth');
Route::get('/roadmap/civil-engineering', 'HomeController@civilRoadmap')->name('civil-roadmap');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'HomeController@courses')->name('courses');
Auth::routes();
