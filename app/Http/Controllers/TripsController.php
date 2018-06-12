<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
use App\Tour;
use App\Trip;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
        $query = $trip->bookings->load('customers', 'primaryCustomer');

        $customers = new Collection();

        foreach ($query as $key => $val){
            $customers->push($val->primaryCustomer);
            foreach ($val->customers as $k => $v){
                $customers->push($v->makeHidden('password'));
            }
        }

        $passengers = $customers->count() + 1;
        $stats = [
            'Average Rating: ' => $trip->reviews->avg('rating') . ' Stars',
            'Total Passengers: ' => $passengers,
            'Space Remaining: ' => $trip->max_passengers - $passengers,
            'Projected Profits: $' => $trip->bookings->count() * $trip->standard_amount
        ];

        return view('trips.show')->with([
            'trip' => $trip,
            'bookings' => $trip->bookings,
            'customers' => $customers,
            'reviews' => $trip->reviews,
            'stats' => $stats
        ]);
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
