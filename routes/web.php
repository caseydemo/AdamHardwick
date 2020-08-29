<?php

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

// Route::get('/posts/{post}', 'PostsController@show');
Route::get('/media/{media}', 'MediaController@show');

// dd($_SERVER['REQUEST_URI']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/composition', 'MediaController@show');

// Route::get('/composition', function () {
//     return view('composition');
// });



Route::get('/teaching', function () {
    return view('teaching');
});


Route::get('/contact', function () {
    return view('contact');
});