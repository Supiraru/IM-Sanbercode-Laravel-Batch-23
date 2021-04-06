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

use Illuminate\Support\Facades\Route;

// HomeController
Route::get('/', "HomeController@home")->name('home');

// AuthController
Route::get('/form', "AuthController@form")->name('form');
Route::post('/welcome', "AuthController@welcome")->name('welcome');
