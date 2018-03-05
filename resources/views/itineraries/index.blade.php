@extends('master')
@section('content')
    <h1>Itineraries</h1>
    @include('partials._search')
    <h3>Click An Itinerary To See More Details</h3>
    @include('partials._table')
    @include('partials._createBtn')
@endsection