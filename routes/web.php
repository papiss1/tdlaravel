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
    return view('index');
});

Route::get('/left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('/no-sidebar', function () {
    return view('no-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('right-sidebar');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/image', function () {
    return view('image');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('action', function () {
    return 'ok nice' ;
});

Route::post('action', function () {
    return 'merci';
});