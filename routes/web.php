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

Route::get('about', function () {
    return view('about');
});

Route::get('category', function () {
    return view('category');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('search-result', function () {
    return view('search-result');
});

Route::get('single-post', function () {
    return view('single-post');
});
