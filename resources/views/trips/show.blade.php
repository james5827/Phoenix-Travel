@extends('master')
@section('content')
    <h1>Trip {{ $record['Trip_Id'] }}</h1>

    @include('partials.single_record_table')
@endsection