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

//Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

//About
Route::get('/about', function () {
    return view('about');
})->name('about');

//News
Route::get('/news', function () {
    return view('news');
})->name('news');