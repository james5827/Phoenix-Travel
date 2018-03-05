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
Route::get('/vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::get('/vehicles/{vehicle}', 'VehiclesController@show');

Route::get('/tours', 'ToursController@index');

Route::get('/trips', 'TripsController@index');

Route::get('/itineraries', 'ItinerariesController@index');

Route::get('/staff', 'StaffController@index');

Route::get('/customers', 'CustomersController@index');

Route::get('/bookings', 'TripBookingsController@index');
