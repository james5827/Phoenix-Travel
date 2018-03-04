<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;


class VehiclesController extends Controller
{
    public function index(Vehicle $v)
    {
        $vehicles = Vehicle::get();
        $attributes = array_keys($vehicles[0]->toArray());

        return view('vehicles.index')->with(['dataset' => $vehicles, 'attributes' => $attributes, 'controller' => 'vehicles', 'key' => [$v->getKeyName()]]);
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show')->with(['vehicle'=>$vehicle, 'Rego_No' => $vehicle->Rego_No]);
    }
}
