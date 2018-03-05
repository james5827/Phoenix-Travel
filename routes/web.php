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
    return view('master');
});

Route::get('/vehicles', 'VehiclesController@index');
Route::get('/vehicles/create', 'VehiclesController@create');
Route::get('/vehicles/update', 'VehiclesController@update');
Route::get('vehicles/store','VehiclesConctroller@store');
Route::get('/vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::get('/vehicles/{vehicle}', 'VehiclesController@show');

Route::get('/tours', 'ToursController@index');
Route::get('/tours/create', 'ToursController@create');
Route::get('/tours/{tour}/edit', 'ToursController@edit');
Route::get('/tours/{tour}', 'ToursController@show');

Route::get('/trips', 'TripsController@index');

Route::get('/itineraries', 'ItinerariesController@index');

Route::get('/staff', 'StaffController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::get('/customers/update', 'CustomersController@update');
Route::get('/customers/{customer}/edit', 'CustomersController@edit');
Route::get('/customers/{customer}', 'CustomersController@show');

Route::get('/bookings', 'TripBookingsController@index');
