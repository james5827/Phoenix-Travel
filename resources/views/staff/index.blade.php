@extends('master')
@section('content')
    <h1>Staff</h1>
    @include('partials._search')
    <h3>Click A Row To See A Staff Member</h3>
    @include('partials._table')
    @include('partials._createBtn')
@endsection