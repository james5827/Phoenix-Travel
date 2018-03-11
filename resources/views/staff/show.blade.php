@extends('master')
@section('content')
    <h1>Staff {{ $record['id'] }}</h1>
    @include('partials.single_record_table')
@endsection
