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

Route::get('/admin/pacientes', 'PacienteController@index'); // listado de pacientes
Route::get('/admin/pacientes/create', 'PacienteController@create'); // crear pacientes formulario
Route::post('/admin/pacientes/', 'PacienteController@store'); // registro pacientes

Route::get('/admin/pacientes/{id}/edit', 'PacienteController@edit'); // actualizar pacientes formulario
Route::post('/admin/pacientes/{id}/edit', 'PacienteController@update'); // actualizar pacientes

Route::post('/admin/pacientes/{id}/delete', 'PacienteController@destroy'); // eliminar pacientes