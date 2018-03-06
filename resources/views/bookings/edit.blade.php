@extends('master')
@section('content')
    <h1>Edit Trip Booking {{ $Trip_Booking->Trip_Booking_No }}</h1>

    @include('partials._bookingform')
@endsection