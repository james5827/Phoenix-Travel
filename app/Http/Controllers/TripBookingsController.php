<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Trip;
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

    public function create(TripBooking $booking)
    {
        $trip_sel = Trip::select(['Trip_Id'])->get()->toArray();

        $customer_sel = Customer::select(['Customer_Id', 'First_Name', 'Last_Name'])->get()->toArray();

        $select_boxes = ['Trip_Id' => $trip_sel, 'Primary_Customer' => $customer_sel];
        return view('bookings.create')->with(['Trip_Booking' => $booking, 'method' => 'POST', 'action' => '/bookings/store', 'select_boxes' => $select_boxes]);
    }

    public function store()
    {

    }

    public function edit(TripBooking $booking)
    {
        $trip_sel = Trip::select(['Trip_Id'])->get()->toArray();

        $customer_sel = Customer::select(['Customer_Id', 'First_Name', 'Last_Name'])->get()->toArray();

        $select_boxes = ['Trip Id' => $trip_sel, 'Primary Customer' => $customer_sel];

        return view('bookings.edit')->with(['Trip_Booking' => $booking, 'method' => 'POST', 'action' => '/bookings/update', 'select_boxes' => $select_boxes]);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
