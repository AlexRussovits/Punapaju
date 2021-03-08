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
    Route::get('/edit/appointment_edit/{id}', 'Crud\AppointmentController@showAppointment');
    Route::post('/edit/appointment_edit/action/{id}', 'Crud\AppointmentController@editAppointment');
    Route::post('/delete/appointment_delete/action/{id}', 'Crud\AppointmentController@destroyAppointment');

    Route::get('/services_dashboard', 'Crud\ServiceController@read');
    Route::get('/edit/services_edit/{id}', 'Crud\ServiceController@showService');
    Route::post('/edit/services_edit/action/{id}', 'Crud\ServiceController@editService');


    Route::get('/gallery_dashboard', 'Crud\GalleryController@read');
    Route::get('/edit/gallery_edit/{id}', 'Crud\GalleryController@showGallery');
    Route::post('/edit/gallery_edit/action/{id}', 'Crud\GalleryController@editGallery');

    Route::get('/sponsor_dashboard', 'Crud\SponsorController@read');
    Route::get('/edit/sponsor_edit/{id}', 'Crud\SponsorController@showSponsor');
    Route::post('/edit/sponsor_edit/action/{id}', 'Crud\SponsorController@editSponsor');

    Route::get('/contacts_dashboard', 'Crud\ContactController@read');
    Route::get('/edit/contacts_edit/{id}', 'Crud\ContactController@showContact');
    Route::post('/edit/contacts_edit/action/{id}', 'Crud\ContactController@editContact');

    Route::get('/user_dashboard', 'Crud\UserController@read');
    Route::get('/edit/user_edit/{id}', 'Crud\UserController@showUser');
    Route::post('/edit/user_edit/action/{id}', 'Crud\UserController@editUser');

    Route::get('/logout', 'Auth\LoginController@logout');

});





