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

Route::resource('pacientes', 'PacienteController');
Route::resource('familias', 'FamiliaController');

Route::resource('comments', 'CommentController');
Route::resource('posts', 'PostController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::post('familiasPaciente/{$paciente}', 'FamiliaController@addPacienteToFamilia');
