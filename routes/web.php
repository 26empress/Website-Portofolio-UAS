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
    return view('home');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});


Route::get('/hubungi_saya', function () {
    return view('hubungi_saya');
});