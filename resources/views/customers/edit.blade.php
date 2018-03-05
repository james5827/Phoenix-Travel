@extends('master')
@section('content')
    <h1>Edit Customer {{ $customer->Customer_Id }}</h1>

    @include('partials._customerform')
@endsection