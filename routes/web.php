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



Route::get('/','PagesController@home');

Route::get('/student','StudentController@index');
Route::get('/student/create','StudentController@create');
Route::get('/student/{student}','StudentController@show');
Route::post('/student','StudentController@store');