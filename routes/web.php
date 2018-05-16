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
Route::post('/vehicles/store','VehiclesController@store');
Route::put('/vehicles/{vehicle}/update', 'VehiclesController@update');
Route::delete('/vehicles/{vehicle}/delete', 'VehiclesController@destroy');
Route::get('/vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::get('/vehicles/{vehicle}', 'VehiclesController@show');

Route::get('/tours', 'ToursController@index');
Route::get('/tours/create', 'ToursController@create');
Route::post('/tours/store', 'ToursController@store');
Route::put('/tours/{tour}/update', 'ToursController@update');
Route::delete('/tours/{tour}/delete', 'ToursController@destroy');
Route::get('/tours/{tour}/edit', 'ToursController@edit');
Route::get('/tours/{tour}', 'ToursController@show');

Route::get('/trips', 'TripsController@index');
Route::get('/trips/create', 'TripsController@create');
Route::post('/trips/store', 'TripsController@store');
Route::put('/trips/{trip}/update', 'TripsController@update');
Route::delete('/trips/{trip}/delete', 'TripsController@destroy');
Route::get('/trips/{trip}/edit', 'TripsController@edit');
Route::get('/trips/{trip}', 'TripsController@show');

Route::get('/itineraries', 'ItinerariesController@index');
Route::get('/itineraries/create', 'ItinerariesController@create');
Route::post('/itineraries/store', 'ItinerariesController@store');
Route::put('/itineraries/{Tour_No}/{Day_No}/update', 'ItinerariesController@update');
Route::delete('/itineraries/{Tour_No}/{Day_No}/delete', 'ItinerariesController@destroy');
Route::get('/itineraries/{Tour_No}/{Day_No}/edit', 'ItinerariesController@edit');
Route::get('/itineraries/{Tour_No}/{Day_No}', 'ItinerariesController@show');

Route::get('/staff', 'StaffController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::post('customers/store', 'CustomersController@store');
Route::put('/customers/{customer}/update', 'CustomersController@update');
Route::delete('/customers/{customer}/delete', 'CustomersController@destroy');
Route::get('/customers/{customer}/edit', 'CustomersController@edit');
Route::get('/customers/{customer}', 'CustomersController@show');

Route::get('/trip_bookings', 'TripBookingsController@index');
Route::get('/trip_bookings/create', 'TripBookingsController@create');
Route::post('/trip_bookings/store', 'TripBookingsController@store');
Route::put('/trip_bookings/{booking}/update', 'TripBookingsController@update');
Route::delete('/trip_bookings/{booking}/delete', 'TripBookingsController@destroy');
Route::get('/trip_bookings/{booking}/edit', 'TripBookingsController@edit');
Route::get('/trip_bookings/{booking}', 'TripBookingsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
