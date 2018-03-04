<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index(Trip $t)
    {
        $trips = Trip::get();
        $attributes = array_keys($trips[0]->toArray());

        return view('trips.index')->with(['dataset' => $trips, 'attributes' => $attributes, 'controller' => 'trips', 'key' => [$t->getKeyName()]]);
    }
}
