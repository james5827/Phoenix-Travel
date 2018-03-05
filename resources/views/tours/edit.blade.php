@extends('master')
@section('content')
    <h1>Edit Tour {{ $tour->Tour_no }}</h1>

    @include('partials._tourform')
@endsection