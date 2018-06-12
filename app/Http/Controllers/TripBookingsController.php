<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\TripBookingRequest;
use App\Trip;
use App\TripBooking;
use Illuminate\Http\Request;

class TripBookingsController extends Controller
{
    public function index(TripBooking $tb)
    {
        $trip_bookings = TripBooking::get();
        $attributes = array_keys($trip_bookings[0]->toArray());

        return view('bookings.index')->with(['dataset' => $trip_bookings, 'attributes' => $attributes, 'controller' => 'trip_bookings', 'key' => [$tb->getKeyName()]]);
    }

    public function show(TripBooking $booking)
    {
        return view('bookings.show')->with([
            'booking' => $booking,
            'customers' => $booking->customers->makeHidden('pivot')
        ]);
    }

    public function create(TripBooking $booking)
    {
        $trip_sel = Trip::select(['trip_id'])->get()->toArray();

        $customer_sel = Customer::select(['customer_id', 'first_name', 'last_name'])->get()->toArray();

        $select_boxes = ['Trip_Id' => $trip_sel, 'Primary_Customer' => $customer_sel];
        return view('bookings.create')->with(['Trip_Booking' => $booking, 'method' => 'POST', 'action' => '/bookings/store', 'select_boxes' => $select_boxes]);
    }

    public function store(TripBookingRequest $request)
    {
        TripBooking::create($request->all());

        return redirect('/trip_bookings/');
    }

    public function edit(TripBooking $booking)
    {
        $trip_sel = Trip::select(['trip_id'])->get()->toArray();

        $customer_sel = Customer::select(['customer_id', 'first_name', 'last_name'])->get()->toArray();

        $select_boxes = ['Trip_Id' => $trip_sel, 'Primary_Customer' => $customer_sel];

        return view('bookings.edit')->with(['Trip_Booking' => $booking, 'method' => 'PUT', 'action' => '/bookings/' . $booking->trip_booking_no . '/update', 'select_boxes' => $select_boxes]);
    }

    public function update(TripBookingRequest $request, TripBooking $booking)
    {
        $booking->update($request->all());
        return redirect('/bookings/');
    }

    public function destroy(TripBooking $booking)
    {
        try {
            $booking->delete();
        }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/trip_bookings/');
    }
}
