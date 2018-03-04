<?php

namespace App\Http\Controllers;

use App\TripBooking;
use Illuminate\Http\Request;

class TripBookingsController extends Controller
{
    public function index(TripBooking $tb)
    {
        $trip_bookings = TripBooking::get();
        $attributes = array_keys($trip_bookings[0]->toArray());

        return view('bookings.index')->with(['dataset' => $trip_bookings, 'attributes' => $attributes, 'controller' => 'bookings', 'key' => [$tb->getKeyName()]]);
    }
}
