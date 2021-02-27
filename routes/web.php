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

Route::get('/', 'guestController@index');
Route::get('/services', 'guestController@services');
Route::get('/service/{id}', 'guestController@serviceOne');
Route::get('/gallery', 'guestController@gallery');
Route::get('/appointment', 'guestController@appointment');
Route::get('/contacts', 'guestController@contacts');

//Make post route
Route::post('/send-contact', 'guestController@sendContact');
Route::post('/send-appointment', 'guestController@sendAppointment');


Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/loginToSystem', 'Auth\LoginController@login');

Route::group(['middleware'=>'auth', 'prefix'=>'dashboard'], function() {
    Route::get('/','AdminController@index');
});
