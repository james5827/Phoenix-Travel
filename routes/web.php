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

//FIX ALL ROUTES STORE AND UPDATE THEY SHOULD NOT BE GET

Route::get('/vehicles', 'VehiclesController@index');
Route::get('/vehicles/create', 'VehiclesController@create');
Route::put('/vehicles/update', 'VehiclesController@update');
Route::post('/vehicles/store','VehiclesController@store');
Route::get('/vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::get('/vehicles/{vehicle}', 'VehiclesController@show');

Route::get('/tours', 'ToursController@index');
Route::get('/tours/create', 'ToursController@create');
Route::get('/tours/update', 'ToursController@update');
Route::post('/tours/store', 'ToursController@store');
Route::get('/tours/{tour}/edit', 'ToursController@edit');
Route::get('/tours/{tour}', 'ToursController@show');

Route::get('/trips', 'TripsController@index');
Route::get('/trips/create', 'TripsController@create');
Route::get('/trips/update', 'TripsController@update');
Route::post('/trips/store', 'TripsController@store');
Route::get('/trips/{trip}/edit', 'TripsController@edit');
Route::get('/trips/{trip}', 'TripsController@show');

Route::get('/itineraries', 'ItinerariesController@index');
Route::get('/itineraries/create', 'ItinerariesController@create');
Route::get('/itineraries/update', 'ItinerariesController@update');
Route::post('/itineraries/store', 'ItinerariesController@store');
Route::get('/itineraries/{Tour_No}/{Day_No}/edit', 'ItinerariesController@edit');
Route::get('/itineraries/{itinerary}', 'ItinerariesController@show');

Route::get('/staff', 'StaffController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::post('/customers/update', 'CustomersController@update');
Route::get('/customers/{customer}/edit', 'CustomersController@edit');
Route::get('/customers/{customer}', 'CustomersController@show');

Route::get('/bookings', 'TripBookingsController@index');
Route::get('/bookings/create', 'TripBookingsController@create');
Route::post('/bookings/update', 'TripBookingsController@update');
Route::get('/bookings/store', 'TripBookingsController@store');
Route::get('/bookings/{booking}/edit', 'TripBookingsController@edit');
Route::get('/bookings/{booking}', 'TripBookingsController@show');
