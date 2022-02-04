<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
// return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@homeGuest') ->name('homeGuest');
Route::get('/registration', 'GuestController@registration') -> name('registration');
Route::get('/login', 'GuestController@accesso') -> name('accesso');
Route::get('/logout', 'Auth\LoginController@logout') ->name('logout');
route::get('/posts', 'GuestController@post') -> name('post');


Route::post('/register', 'Auth\RegisterController@register') ->name('register');
Route::post('/login', 'Auth\LoginController@login') ->name('login');




