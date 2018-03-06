<?php

namespace App\Http\Controllers;

use App\Itinerary;
use App\Tour;
use Illuminate\Http\Request;


class ItinerariesController extends Controller
{
    public function index(Itinerary $i)
    {
        $itineraries = Itinerary::get();
        $attributes = array_keys($itineraries[0]->toArray());

        return view('itineraries.index')->with(['dataset' => $itineraries, 'attributes' => $attributes, 'controller' => 'itineraries', 'key' => $i->getKeyName()]);
    }

    public function create(Itinerary $itinerary)
    {
        $tour_sel = Tour::select(['Tour_no', 'Tour_Name'])->get()->toArray();

        $select_boxes = ['Tour Number' => $tour_sel];

        return view('itineraries.create')->with(['itinerary' => $itinerary, 'method' => 'POST', 'action' => 'itineraries.store', 'select_boxes' => $select_boxes]);
    }

    public function store()
    {

    }

    public function edit($Tour_No, $Day_No)
    {
        $itinerary = Itinerary::where('Tour_No', '=', $Tour_No )->where('Day_No', '=', $Day_No)->first();

        $tour_sel = Tour::select(['Tour_no', 'Tour_Name'])->get()->toArray();

        $select_boxes = ['Tour Number' => $tour_sel];

        return view('itineraries.edit')->with(['itinerary' => $itinerary, 'method' => 'POST', 'action' => 'itineraries.store', 'select_boxes' => $select_boxes]);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
