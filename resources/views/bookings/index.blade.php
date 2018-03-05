@extends('master')
@section('content')
    <h1>Bookings</h1>
    @include('partials._search')
    <h3>Click A Booking To See More Details</h3>
    @include('partials._table')
    @include('partials._createBtn')
@endsection