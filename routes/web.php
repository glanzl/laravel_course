<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/
Route::get('/', function () {return view('welcome');});

Route::get('/insert',function () {
    DB::insert('INSERT INTO posts(title, content) VALUES (?,?)',['PHP with Laravel','Laravel is the best PHP Framework']);
});

Route::get('/read',function () {
    $results = DB::select('SELECT *FROM posts WHERE id=?',[1]);
    foreach ($results as $post) {
        return $post->title;
    }
});

Route::get('/update',function () {
    $updated = DB::update('UPDATE posts SET title="PHP with Laravel or Symfony" WHERE id=?',[1]);
    return $updated; // 1
});

Route::get('/delete',function () {
    $deleted = DB::delete('DELETE FROM posts WHERE id=?',[1]);
    return $deleted; // 1
});

// Route::resource('/posts','PostsController');

// // http://127.0.0.1:8000/contact
// Route::get('/contact','PostsController@contact');

// http://127.0.0.1:8000/post/10/34/23
// Route::get('/post/{id}/{name}/{password}','PostsController@show_post');

