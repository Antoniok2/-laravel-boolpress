<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
// return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home') ->name('home');

Route::post('/register', 'Auth\RegisterController@register') ->name('register');

Route::get('/logout', 'Auth\LoginController@logout') ->name('logout');

Route::post('/login', 'Auth\LoginController@login') ->name('login');

Route::get('/registration', 'GuestController@registration') -> name('registration');

Route::get('/login', 'GuestController@accesso') -> name('accesso');
