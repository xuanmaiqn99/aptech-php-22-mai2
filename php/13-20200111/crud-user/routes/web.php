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
Route::get('/users', 'UserController@index');
Route::get('/users/create','UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::post('/users/store', 'UserController@store');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::patch('/users/{id}', 'UserController@update');
Route::delete('/users/{id}/delete','UserController@destroy');