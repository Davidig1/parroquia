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

Route::get('/quienessomos', function () {
    return view('quienessomos');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/bautizo', function () {
    return view('bautizo');
});

Route::get('/comunion', function () {
    return view('comunion');
});

Route::get('/confirmacion', function () {
    return view('confirmacion');
});

Route::get('/matrimonio', function () {
    return view('matrimonio');
});

Route::get('/catequesis', function () {
    return view('catequesis');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
