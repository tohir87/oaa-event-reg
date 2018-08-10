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

Route::get('/', 'RegistrationController@index');
Route::get('/register', 'RegistrationController@index');
Route::post('/register', 'RegistrationController@save_participant_details');
Route::get('/access_level/{ref_id}', 'RegistrationController@access_level');
Route::post('/save_invoice', 'RegistrationController@saveInvoice');
Route::get('/invoice/{ref_id}', 'RegistrationController@generate_invoice_pdf');
Route::get('/payment/{ref_id}', 'RegistrationController@payment');
