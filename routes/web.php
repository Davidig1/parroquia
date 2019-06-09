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
Route::get('/catequesis', function () {
    return view('catequesis');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Eventos - Dashboard
Route::get('/home/eventos', 'EventController@index')->name('events.index');
Route::post('/home/eventos/crear', 'EventController@create')->name('events.create');
//<<<<<<< HEAD


//Inscripcion sacramentos y requisitos
Route::post('/home/crearcomunion', 'UserinController@crearcom')->name('comunion.crear');
Route::post('/home/crearbautismo', 'UserinController@crearbau')->name('bautismo.crear');
Route::post('/home/crearcatequesis', 'UserinController@crearcat')->name('catequesis.crear');
Route::post('/home/crearconfirmacion', 'UserinController@crearcon')->name('confirmacion.crear');
//=======
Route::get('/home/eventos/eliminar/{event}', 'EventController@delete')->name('events.delete');
//>>>>>>> 9c6382a360ba375fa68f8206d2308b7291741e5f
