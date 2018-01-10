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
    return view('welcome');
});

Route::get('/pages', function () {
    return view('pages');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/biznews', function () {
    return view('biznews');
});

Route::get('/management', function () {
    return view('management');
});

Route::get('/home', function () {
    return view('home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
