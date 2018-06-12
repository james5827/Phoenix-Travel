@extends('master')
@section('content')
    <h1>Vehicle {{ $vehicle->rego_no }}</h1>

    <br>
    <h2>Registration Number: <b>{{ $vehicle->rego_no }}</b></h2>
    <br>
    <h2>Vehicle Identification Number: <b>{{ $vehicle->vin }}</b></h2>
    <br>
    <h2>Car: <b>{{ $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model}}</b></h2>
    <br>
    <h2>Capacity: <b>{{ $vehicle->capacity }}</b></h2>
    <br>
    <h2>Fuel Type: <b>{{ $vehicle->fuel_type }}</b></h2>
    <br>
    <h2>Equipment: <b>{{ $vehicle->equipment }}</b></h2>
    <br>
    <h2>License Required: <b>{{ $vehicle->license_required }}</b></h2>

    <hr>

    <h1>Vehicle Trips</h1>

    @if($trips->count())
        @include('partials._table', [
            'controller' => 'trips',
            'dataset' => $trips,
            'attributes' => array_keys($trips[0]->toArray()),
            'key' => [$trips[0]->getKeyName()],
            'id' => 'tripTable'
        ])
    @else
        <div style="text-align: center">
            <h3>No Trips Associated with this vehicle</h3>
            <a class="btn-primary btn text-light" id="addNew" href="{{ url('trips/create') }}">Add One</a>
        </div>
    @endif

    <hr>

@endsection

@include('partials._stats', ['stats' => $stats])