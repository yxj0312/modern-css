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
// Ep1-2
Route::get('/', function () {
    return view('welcome');
});

// Ep3
Route::get('/card', function () {
    return view('card');
});

// Ep4
Route::get('/card-tailwind', function () {
    return view('card-tailwind');
});

Route::get('/ep5', function () {
    return view('flexbox');
});

Route::get('/ep5.1', function () {
    return view('sticky');
});

