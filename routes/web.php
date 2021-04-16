<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Post;

Route::get('/', function () {return view('welcome');});

// ELOQUENT
