@extends('master')
@section('content')
    <h1>Tour {{ $record['Tour_no'] }}</h1>
    @include('partials.single_record_table')
@endsection
