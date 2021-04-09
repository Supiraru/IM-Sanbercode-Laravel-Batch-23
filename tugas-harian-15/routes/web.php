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

Route::get('/cast', 'CastController@cast')->name('cast');

Route::post('/cast', 'CastController@store');

Route::get('/cast/create', 'CastController@create')->name('create');

Route::get('/cast/{id}', 'CastController@show')->name('show');

Route::get('/cast/{id}/edit', 'CastController@edit')->name('edit');

Route::put('/cast/{id}', 'CastController@update');

Route::delete('/cast/{id}', 'CastController@destroy');