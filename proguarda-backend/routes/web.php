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

Route::get('/', function () {
    return view('proguarda-login2');
});

Route::get('/login2', function () {
    return view('proguarda-login');
});

Route::get('/projeto', function () {
    return view('proguarda-projeto');
});