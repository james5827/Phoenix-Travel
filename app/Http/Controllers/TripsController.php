<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
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
        return view('trips.show')->with(['record' => $trip]);
    }

    public function create(Trip $trip)
    {
        $vehiclesSel = Vehicle::select(['Rego_No', 'Model'])->get()->toArray();
        $toursSel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ["Rego_No" => $vehiclesSel, 'Tour_No' => $toursSel];

        //dd($select_boxes);
        return view('trips.create')->with([
                'trip' => $trip, 'method' => 'POST',
                'action' => '/trips/store',
                'select_boxes' => $select_boxes
            ]
        );
    }

    public function store(TripRequest $request)
    {
        Trip::create($request->all());

        return redirect('/trips/');
    }

    public function edit(Trip $trip)
    {
        $vehiclesSel = Vehicle::select(['Rego_No', 'Model'])->get()->toArray();
        $toursSel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ["Rego_No" => $vehiclesSel, 'Tour_No' => $toursSel];

        return view('trips.edit')->with(['trip' => $trip, 'method' => 'PUT', 'action' => '/trips/' . $trip->Trip_Id . '/update', 'select_boxes' => $select_boxes]);
    }

    public function update(TripRequest $request, Trip $trip)
    {
        $trip->update($request->all());
        return redirect('/trips/');
    }

    public function destroy(Trip $trip)
    {
        try {
            $trip->delete();
        }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/trips/');
    }
}
