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
        dd($vehicle->trips);
        return view('vehicles.show')->with(['vehicle' => $vehicle]);
    }

    public function create(Vehicle $vehicle)
    {
        return view('vehicles.create')->with(['vehicle' => $vehicle, 'method' => 'POST', 'action' => 'vehicles/store']);
    }

    public function store()
    {

    }

    public function edit(Vehicle $vehicle)
    {
        //alter forms, needs method field function in order to work html5 form doesn't support put by default
        return view('vehicles.edit')->with(['vehicle' => $vehicle, 'method' => 'POST', 'action' => 'vehicles/update']);
    }
}
