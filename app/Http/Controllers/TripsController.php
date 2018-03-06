<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Trip;
use App\Vehicle;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index(Trip $t)
    {
        $trips = Trip::get();
        $attributes = array_keys($trips[0]->toArray());

        return view('trips.index')->with(['dataset' => $trips, 'attributes' => $attributes, 'controller' => 'trips', 'key' => [$t->getKeyName()]]);
    }

    public function show(Trip $trip)
    {

    }

    public function create(Trip $trip)
    {
        $vehiclesSel = Vehicle::select(['Rego_No', 'Model'])->get()->toArray();
        $toursSel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ["Rego_No " => $vehiclesSel, 'Tour_No' => $toursSel];

        //dd($select_boxes);
        return view('trips.create')->with([
                'trip' => $trip, 'method' => 'POST',
                'action' => '/tours/store',
                'select_boxes' => $select_boxes
            ]
        );
    }

    public function store()
    {

    }

    public function edit(Trip $trip)
    {
        $vehiclesSel = Vehicle::select(['Rego_No', 'Model'])->get()->toArray();
        $toursSel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ["Vehicle " => $vehiclesSel, 'Tour' => $toursSel];

        return view('trips.edit')->with(['trip' => $trip, 'method' => 'POST', 'action' => '/tours/update', 'select_boxes' => $select_boxes]);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
