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



Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/loginToSystem', 'Auth\LoginController@login');

Route::group(['middleware'=>'auth', 'prefix'=>'dashboard'], function() {
    Route::get('/','AdminController@index');
    Route::get('/appointment_dashboard', 'Crud\AppointmentController@read');
    Route::get('/edit/appointment_edit/{id}', 'Crud\AppointmentController@showEdit');
    Route::get('/services_dashboard', 'Crud\ServiceController@read');
    Route::get('/gallery_dashboard', 'Crud\GalleryController@read');
    Route::get('/sponsor_dashboard', 'Crud\SponsorController@read');
    Route::get('/contacts_dashboard', 'Crud\ContactController@read');
    Route::get('/user_dashboard', 'Crud\UserController@read');
    Route::post('/send-appointment', 'guestController@sendAppointment');
    Route::post('/edit/appointment_edit/action/{id}', 'Crud\AppointmentController@editAppointment');
    Route::get('/logout', 'Auth\LoginController@logout');

});





