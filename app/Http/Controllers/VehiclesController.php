<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Vehicle;
use Illuminate\Http\Request;


class VehiclesController extends Controller
{
    /**
     * @param Vehicle $v
     * @return $this
     */
    public function index(Vehicle $v)
    {
        $vehicles = Vehicle::get();
        $attributes = array_keys($vehicles[0]->toArray());

        return view('vehicles.index')->with(['dataset' => $vehicles, 'attributes' => $attributes, 'controller' => 'vehicles', 'key' => [$v->getKeyName()]]);
    }

    /**
     * @param Vehicle $vehicle
     * @return $this
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show')->with(['record' => $vehicle]);
    }

    /**
     * @param Vehicle $vehicle
     * @return $this
     */
    public function create(Vehicle $vehicle)
    {
        $select_boxes = ['Fuel_Type' => [['Diesel'], ['Petrol']]];

        return view('vehicles.create')->with(['vehicle' => $vehicle, 'method' => 'POST', 'action' => 'vehicles/store', 'select_boxes' => $select_boxes]);
    }

    /**
     * @param VehicleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->all());

        return redirect('/vehicles/');
    }

    /**
     * @param Vehicle $vehicle
     * @return $this
     */
    public function edit(Vehicle $vehicle)
    {
        $select_boxes = ['Fuel_Type' => [['Diesel'], ['Petrol']]];
        return view('vehicles.edit')->with(['vehicle' => $vehicle, 'method' => 'PUT', 'action' => 'vehicles/' . $vehicle->Rego_No . '/update', 'select_boxes' => $select_boxes]);
    }

    /**
     * @param VehicleRequest $request
     * @param Vehicle $vehicle
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return redirect('/vehicles/');
    }

    /**
     * @param Vehicle $vehicle
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Vehicle $vehicle)
    {
        try {
            $vehicle->delete();
        }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/vehicles/');
    }
}
