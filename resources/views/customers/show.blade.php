@extends('master')
@section('content')
    <h1>Customer {{ $record['Customer_Id'] }}</h1>
    @include('partials.single_record_table')
@endsection
