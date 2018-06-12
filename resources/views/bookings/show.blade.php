@extends('master')
@section('content')
    <h1>Booking {{ $booking->trip_booking_no }}</h1>

    <h2>Trip Booking Number: <b>{{ $booking->trip_booking_no }}</b></h2>
    <br>
    <h2>Trip Id: <b>{{ $booking->trip_id }}</b></h2>
    <br>
    <h2>Primary Customer: <b>{{ $booking->primary_customer }}</b></h2>
    <br>
    <h2>Booking Date: <b></b></h2>
    <input type="date" class="form-control" value="{{ $booking->booking_date }}" style="font-size: 2em; text-align: center; font-weight: bold" readonly>
    <br>
    <h2>Deposit Amount: <b>{{ $booking->deposit_amount }}</b></h2>
    <br>

    <hr>

    <h1></h1>

    <h1>Additional Customers</h1>
    @if(count($customers))
        @include('partials._table' , [
        'controller' => 'customers',
        'dataset' => $customers,
        'attributes' => array_keys($customers[0]->toArray()),
        'key' => [$customers[0]->getKeyName()],
        'id' => 'customersTable'
        ])
    @else
        <div style="text-align: center">
            <h3>No Additional Customers For This Booking</h3>
            <a class="btn-primary btn text-light" id="addNew" href="{{ url('customers/create') }}">Add One</a>
        </div>
    @endif

    <hr>
@endsection
