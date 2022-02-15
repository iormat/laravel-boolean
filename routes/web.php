<?php

use Illuminate\Support\Facades\Route;

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

// public routes
Route::get('/', 'GuestController@index') -> name('index');
Route::get('/register', 'GuestController@register') -> name('register');
Route::get('/login', 'GuestController@login') -> name('login');

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');




// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
