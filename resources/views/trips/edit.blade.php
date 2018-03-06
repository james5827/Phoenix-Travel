@extends('master')
@section('content')
    <h1>Edit Trip Number {{ $trip->Trip_Id }}</h1>

    @include('partials._tripform')
@endsection