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
        $trip->load(['vehicle', 'tour']);

        $tour_parent = '/tours/' . $trip->getRelation('tour')->Tour_no;
        $vehicle_parent = '/vehicles/' . $trip->getRelation('vehicle')->Rego_No;

        $parent_relations = ["Tour_No" => $tour_parent, "Rego_No" => $vehicle_parent];

        return view('trips.show')->with(['record' => $trip, 'parent_relations' => $parent_relations, 'controller' => 'trips']);
    }

    public function create(Trip $trip)
    {
        $vehiclesSel = Vehicle::select(['rego_no', 'model'])->get()->toArray();
        $toursSel = Tour::select(['tour_no', 'tour_name'])->get()->toArray();

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
        $vehiclesSel = Vehicle::select(['rego_no', 'model'])->get()->toArray();
        $toursSel = Tour::select(['tour_no', 'tour_name'])->get()->toArray();

        $select_boxes = ["Rego_No" => $vehiclesSel, 'Tour_No' => $toursSel];

        return view('trips.edit')->with(['trip' => $trip, 'method' => 'PUT', 'action' => '/trips/' . $trip->trip_id . '/update', 'select_boxes' => $select_boxes]);
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
