@extends('master')
@section('content')
    <h1>Vehicle {{ $record["Rego_No"] }}</h1>

    @include('partials.single_record_table')
@endsection