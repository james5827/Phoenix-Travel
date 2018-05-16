@extends('master')
@section('content')
    <h1>Edit Staff {{ $staff->id }}</h1>

    @include('partials._staffform')
@endsection