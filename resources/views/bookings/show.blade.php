@extends('master')
@section('content')
    <h1>Booking {{ $record['Trip_Booking_No'] }}</h1>
    @include('partials.single_record_table')
@endsection
