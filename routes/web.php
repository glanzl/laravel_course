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

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/about', function () {
    return "Welcome, Spartans";
});
Route::get('/contact', function () {
    // return view('welcome');
    return "Not welcome, Arcadians";
});
Route::get('/post/{id}', function ($id) {
    return "This is Athenian boylover number " . $id;
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){
    $url = route('admin.home');
    return "This url is " . $url;
}));
