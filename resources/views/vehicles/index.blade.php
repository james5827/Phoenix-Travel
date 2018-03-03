@extends('master')
@section('content')
    <h1>Vehicles</h1>

    @if(! empty($vehicles))
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <td>Registration</td>
                    <td>VIN</td>
                    <td>Make</td>
                    <td>Model</td>
                    <td>Year</td>
                    <td>Capacity</td>
                    <td>Fuel_Type</td>
                    <td>Equipment</td>
                    <td>License_Required</td>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->Rego_No }}</td>
                        <td>{{ $vehicle->VIN }}</td>
                        <td>{{ $vehicle->Make }}</td>
                        <td>{{ $vehicle->Model }}</td>
                        <td>{{ $vehicle->Year }}</td>
                        <td>{{ $vehicle->Capacity }}</td>
                        <td>{{ $vehicle->Fuel_Type }}</td>
                        <td>{{ $vehicle->Equipment }}</td>
                        <td>{{ $vehicle->License_Required }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection