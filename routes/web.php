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

Route::get('/', 'WebController@welcome');
Route::get('/quienessomos', 'WebController@quienessomos');



Route::get('/eventos',  'WebController@eventos');
Route::get('/bautizo',  'WebController@bautizo');
Route::get('/catequesis', 'WebController@catequesis');
Route::get('/comunion',  'WebController@comunion');
Route::get('/confirmacion',  'WebController@confirmacion');

Route::get('/matrimonio',	'WebController@matrimonio');
Route::get('/contactenos',	'WebController@contactenos');
Route::get('/sermones',	'WebController@sermones');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Eventos - Dashboard
Route::get('/home/eventos', 'EventController@index')->name('events.index');
Route::post('/home/eventos/crear', 'EventController@create')->name('events.create');
Route::get('/home/eventos/eliminar/{event}', 'EventController@delete')->name('events.delete');
Route::post('/home/eventos/reporte', 'EventController@report')->name('events.report');
Route::get('/home/eventos/{event}', 'EventController@view')->name('events.view');


//Inscripcion sacramentos y requisitos
Route::post('/home/crearcomunion', 'UserinController@crearcom')->name('comunion.crear');
Route::post('/home/crearbautismo', 'UserinController@crearbau')->name('bautismo.crear');
Route::post('/home/crearcatequesis', 'UserinController@crearcat')->name('catequesis.crear');
Route::post('/home/crearconfirmacion', 'UserinController@crearcon')->name('confirmacion.crear');
Route::post('/home/crearmatrimonio', 'UserinController@crearmat')->name('matrimonio.crear');



//Lista Inscritos
Route::get('/home/lista', 'UserinController@lista')->name('lista.index');

//Reporte Lista Inscritos
Route::get('/home/listareporte', 'UserinController@listareporte')->name('lista.reporte');
//Reporte Matrimonio
Route::get('/home/{m}/reportemat', 'UserinController@reportemat')->name('reporte.mat');
//reporte bautizo
Route::get('/home/{a}/reportebau', 'UserinController@reportebau')->name('reporte.bau');
//reporte confirmacion
Route::get('/home/{a}/reportecon', 'UserinController@reportecon')->name('reporte.con');
//reporte comunion
Route::get('/home/{a}/reportecom', 'UserinController@reportecom')->name('reporte.com');
//reporte catequesis
Route::get('/home/{a}/reportecat', 'UserinController@reportecat')->name('reporte.cat');