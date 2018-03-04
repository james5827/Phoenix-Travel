<?php

namespace App\Http\Controllers;

use App\TripBooking;
use Illuminate\Http\Request;

class TripBookingsController extends Controller
{
    public function index()
    {
        $trip_bookings = TripBooking::get();
        $tb = new TripBooking;
        $attributes = array_keys($trip_bookings[0]->toArray());

        return view('bookings.index')->with(['dataset' => $trip_bookings, 'attributes' => $attributes, 'controller' => 'bookings', 'key' => $tb->getKeyName()]);
    }
}
