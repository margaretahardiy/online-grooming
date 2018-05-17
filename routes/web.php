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

 Route::get('/', 'LoginController@showInitialPage');
 Route::get('/login', 'LoginController@showLogin');
 Route::post('/login', 'LoginController@doLogin');
 Route::get('/register', 'RegisterController@showRegister');
 Route::post('/register', 'RegisterController@doRegister');
 Route::get('/profile', 'ProfileController@showProfile');
 Route::post('/profile', 'ProfileController@updateProfile');
 Route::get('/dogs', 'DogController@showDogList');
 Route::get('/homepage',  function (Request $request) {
   return View::make('homepage');
 });
 
 Route::get('/homepage','Controller@redirectHomepage');
 Route::get('dogs/{id}','DogController@showDogInfo');
 Route::post('dogs/{id}','DogController@updateDogInfo');
 Route::get('insert-dog','DogController@showInsertDog');
 Route::post('insert-dog','DogController@saveDogInfo');
 Route::get('/new-appointment','AppointmentController@showNewAppointment');
 Route::get('/appointment-date/{date}', 'AppointmentController@checkAvailableTime');
 Route::post('/new-appointment','AppointmentController@createNewAppointment');
 Route::get('/edit-appointment/{id}','AppointmentController@showEditAppointment');
 Route::post('/edit-appointment/{id}','AppointmentController@updateAppointment');
 Route::get('/delete-appointment/{id}','AppointmentController@destroy');
 Route::get('/logout','Controller@doLogout');