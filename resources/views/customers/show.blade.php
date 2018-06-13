@extends('master')
@section('content')
    <h1>Customer {{ $customer->customer_id }}</h1>

    <h2>Customer Id: <b>{{ $customer->customer_id }}</b></h2>
    <br>
    <h2>Customer Email: <b>{{ $customer->email }}</b></h2>
    <br>
    <h2>Customer Name: <b>{{ $customer->first_name . ' ' . $customer->middle_initial . ' ' . $customer->last_name }}</b></h2>
    <br>
    <h2>Address: <b>{{ $customer->street_no . ' ' . $customer->street_name . ' ' . $customer->suburb . ' ' . $customer->postcode }}</b></h2>
    <br>
    <h2>Customer Phone Number: <b>{{ $customer->phone }}</b></h2>
    <br>
    @if($customer->authcustomer)
        <button class="btn btn-block btn-success">Authorised</button>
    @else
        <button class="btn btn-block btn-danger">Unauthorised</button>
    @endif

    <hr>

    <h1>Customer Bookings</h1>
    @if(count($bookings))
        @include('partials._table', [
            'controller' => 'bookings',
            'dataset' => $bookings,
            'attributes' => array_keys($bookings[0]->toArray()),
            'key' => [$bookings[0]->getKeyName()],
            'id' => 'bookingsTable'
        ])
    @else
        <div style="text-align: center">
            <h3>No Bookings For This Customer</h3>
            <a class="btn-primary btn text-light" id="addNew" href="{{ url('customers/create') }}">Add One</a>
        </div>
    @endif
    <hr>

    <h1>Customer Reviews</h1>
    @if(count($reviews))
        @include('partials._table', [
            'controller' => 'reviews',
            'dataset' => $reviews,
            'attributes' => array_keys($reviews[0]->toArray()),
            'key' => $reviews[0]->getKeyName(),
            'id' => 'customersTable'
        ])
    @else
        <div style="text-align: center">
            <h3>No Reviews For This Customer</h3>
            <a class="btn-primary btn text-light" id="addNew" href="{{ url('customers/create') }}">Add One</a>
        </div>
    @endif
@endsection

@include('partials._stats', $stats)
