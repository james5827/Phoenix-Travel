@extends('master')
@section('content')
    <h1>Trip {{ $trip->trip_id }}</h1>

    <h2>Trip Id: <b>{{ $trip->trip_id }}</b></h2>
    <br>
    <h2>Tour Number: <b>{{ $trip->tour_no }}</b></h2>
    <br>
    <h2>Registration Number: <b>{{ $trip->rego_no }}</b></h2>
    <br>

    <h2>Departure Date: </h2>
    <input type="date" class="form-control" value="{{ $trip->departure_date }}" style="font-size: 2em; text-align: center; font-weight: bold" readonly />
    <br>

    <h2>Maximum Passengers: <b>{{ $trip->max_passengers }}</b></h2>
    <br>

    <h2>Standard Amount: <b>{{ $trip->standard_amount }}</b></h2>

    <hr>

    <h1>Trip Bookings</h1>
        @include('partials._table' , [
        'controller' => 'bookings',
        'dataset' => $bookings,
        'attributes' => array_keys($bookings[0]->getAttributes()),
        'key' => [$bookings[0]->getKeyName()],
        'id' => 'bookingsTable'
        ])
    <hr>

    <h1>Trip Customers</h1>
    @include('partials._table' , [
        'controller' => 'customers',
        'dataset' => $customers,
        'attributes' => array_keys($customers[0]->toArray()),
        'key' => [$customers[0]->getKeyName()],
        'id' => 'customersTable'
        ])
    <hr>

    <h1>Trip Reviews</h1>
    @include('partials._table' , [
        'controller' => 'reviews',
        'dataset' => $reviews,
        'attributes' => array_keys($reviews[0]->toArray()),
        'key' => $reviews[0]->getKeyName(),
        'id' => 'reviewsTable'
        ])
    <hr>
@endsection

@include('partials._stats', $stats)