<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Tour;
use App\Trip;
use Illuminate\Http\Request;

class ToursController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Tour $t)
    {
        $tours = Tour::get();

        $attributes = array_keys($tours[0]->toArray());
        return view('tours.index')->with(['dataset' => $tours, 'attributes' => $attributes, 'controller' => 'tours', 'key' => [$t->getKeyName()]]);
    }

    public function show(Tour $tour)
    {
        $total_revenue_query = \DB::table('trips')
            ->selectRaw(
    'SUM(trips.standard_amount * (
               SELECT COUNT(*)
               FROM trip_bookings 
               INNER JOIN trips ON trip_bookings.trip_id = trips.trip_id 
               WHERE trips.tour_no = ?
               AND departure_date < NOW())) as total_revenue', [$tour->tour_no]
            )->where('trips.tour_no', '=', $tour->tour_no)
            ->first();

        $projected_revenue_query = \DB::table('trips')
            ->selectRaw(
                'SUM(trips.standard_amount * (
               SELECT COUNT(*)
               FROM trip_bookings 
               INNER JOIN trips ON trip_bookings.trip_id = trips.trip_id 
               WHERE trips.tour_no = ?
               AND departure_date > NOW())) as total_revenue', [$tour->tour_no]
            )->where('trips.tour_no', '=', $tour->tour_no)
            ->first();

        $stats = [
            'No. of Reviews: ' => $tour->reviews->count(),
            'Average Rating: ' => $tour->reviews->avg('rating') . ' Stars',

            'No. of Trips: ' => $tour->trips->count(),
            'Total Bookings: ' => $tour->bookings->count(),
            'Total Earned Revenue: $' => $total_revenue_query->total_revenue,
            'Projected Revenue: $' => $projected_revenue_query->total_revenue,
        ];

//        dd($tour->reviews());

        return view('tours.show')->with([
            'tour' => $tour->makeVisible('route_map'),
            'trips' => $tour->trips,
            'reviews' => $tour->reviews,
            'itineraries' => $tour->itineraries,
            'stats' => $stats
        ]);
    }

    public function create(Tour $tour)
    {
        return view('tours.create')->with(['tour' => $tour, 'method' => 'POST', 'action' => 'tours/store']);
    }

    public function store(TourRequest $request)
    {
        Tour::create($request->all());

        return redirect('/tours/');
    }

    public function edit(Tour $tour)
    {
        //alter forms, needs method field function in order to work html5 form doesn't support put by default
        return view('tours.edit')->with(['tour' => $tour, 'method' => 'PUT', 'action' => 'tours/' . $tour->tour_no . '/update']);
    }

    public function update(TourRequest $request, Tour $tour)
    {
        $tour->update($request->all());

        return redirect('/tours/');
    }

    public function destroy(Tour $tour)
    {
        try {
            $tour->delete();
        }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/tours/');
    }
}
