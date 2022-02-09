<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
// return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@homeGuest') ->name('homeGuest');

// ROTTE DI REGISTRAZIONE, LOGIN E LOGOUT
Route::get('/registration', 'GuestController@registration') -> name('registration');
Route::get('/login', 'GuestController@accesso') -> name('accesso');
Route::get('/logout', 'Auth\LoginController@logout') ->name('logout');

Route::post('/register', 'Auth\RegisterController@register') ->name('register');
Route::post('/login', 'Auth\LoginController@login') ->name('login');

// ROTTA POST
Route::get('/posts', 'HomeController@posts') -> name('posts');

// ROTTE DI CREAZIONE POST
Route::get('/posts/create', 'HomeController@create') -> name('create');
Route::post('/posts/store', 'HomeController@store') ->name('store');

// ROTTE DI MODIFICA POST
Route::get('/posts/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('/posts/update/{id}', 'HomeController@update') ->name('update');

// ROTTA PER ELIMINARE IL POST
Route::get('/posts/delete/{id}', 'HomeController@delete') -> name('delete');





// Route::middleware('auth')->group(function(){

// });




