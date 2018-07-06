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
Route::get('/', function () {
    return view('users.index');
});
Route::post('/user/login','UsersController@login');
Route::post('/available/datecheck','AvailableController@dateCheck');
Route::resource('user', 'UsersController');
Route::resource('available', 'AvailableController');
Route::resource('apoint', 'ApointmentController');
Route::resource('medication', 'MedicationController');
Route::resource('prescription', 'PrescriptionController');
Route::resource('results', 'ResultsController');
Route::get('/chart','UsersController@chart');