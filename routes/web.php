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
Route::get('/posts', 'HomeController@posts') -> name('posts');
Route::get('/posts/create', 'HomeController@create') -> name('create');


Route::post('/register', 'Auth\RegisterController@register') ->name('register');
Route::post('/login', 'Auth\LoginController@login') ->name('login');
Route::post('/posts/store', 'HomeController@store') ->name('store');

// Route::middleware('auth')->group(function(){

// });




