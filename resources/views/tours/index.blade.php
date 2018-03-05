@extends('master')
@section('content')
    <h1>Tours</h1>
    @include('partials._search')
    <h3>Click A Tour To See More Details</h3>
    @include('partials._table')
    @include('partials._createBtn')
@endsection