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

// auth only routes
    //api routes
Route::prefix('/api/postcards') -> group(function () {
    Route::get('/get', 'ApiController@getPostcards') -> name('api.postcards.get');
});

Route::get('/postcard/create', 'HomeController@createPostcard') -> name('create');
Route::post('/postcard/store', 'HomeController@storePostcard') -> name('store');



// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
