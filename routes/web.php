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

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('logout','AuthController@logout');

Route::group(['middleware'=>'auth'] ,function(){
    Route::get('/', 'PagesController@home');
    Route::get('/user','PagesController@index');
    Route::get('/user/json','PagesController@json');

    Route::get('/student', 'StudentController@index');
    Route::get('/student/create', 'StudentController@create');
    Route::get('/student/{student}', 'StudentController@show');
    Route::post('/student', 'StudentController@store');
    Route::get('/student/{student}/edit', 'StudentController@edit');
    Route::patch('/student/{student}', 'StudentController@update');
    Route::delete('/student/{student}', 'StudentController@destroy');
});