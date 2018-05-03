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

 Route::get('/', 'LoginController@showLogin');
 Route::post('/login', 'LoginController@doLogin');
 Route::get('/register', 'RegisterController@showRegister');
 Route::post('/register', 'RegisterController@doRegister');
 Route::get('/profile', 'ProfileController@showProfile');
 Route::post('/profile', 'ProfileController@updateProfile');
 Route::get('/dogs', 'DogController@showDogList');
 Route::get('/welcome',  function (Request $request) {
   return View::make('welcome2');
 });