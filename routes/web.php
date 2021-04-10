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

// Route::get('/', function () {return view('welcome');});
// Route::resource('/posts','PostsController');
// http://127.0.0.1:8000/contact
Route::get('/contact','PostsController@contact');
// http://127.0.0.1:8000/post/10/34/23
Route::get('/post/{id}/{name}/{password}','PostsController@show_post');