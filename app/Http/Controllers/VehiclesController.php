<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
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
        $select_boxes = ['Fuel_Type' => [['Diesel'], ['Petrol']]];

        return view('vehicles.create')->with(['vehicle' => $vehicle, 'method' => 'POST', 'action' => 'vehicles/store', 'select_boxes' => $select_boxes]);
    }

    public function store(VehicleRequest $request)
    {
        dd($request->all());
    }

    public function edit(Vehicle $vehicle)
    {
        $select_boxes = ['Fuel Type' => [['Diesel'], ['Petrol']]];
        return view('vehicles.edit')->with(['vehicle' => $vehicle, 'method' => 'PUT', 'action' => 'vehicles/update', 'select_boxes' => $select_boxes]);
    }

    public function update(VehicleRequest $request)
    {

    }
}
