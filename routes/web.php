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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eliminar/usuario/{idUsuario}', 'HomeController@destroy');
Route::get('/asignaturas', 'AsignaturasController@index')->name('asignaturas_list');

Route::get('/asignaturas/{id}', 'AsignaturasController@show');

Route::post('/asignaturas/create', 'AsignaturasController@store');

Route::post('/asignaturas/{id}', 'AsignaturasController@update');

Route::get('/asignaturas/eliminar/{id}', 'AsignaturasController@delete');








































