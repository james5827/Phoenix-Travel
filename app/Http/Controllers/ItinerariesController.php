<?php

namespace App\Http\Controllers;

use App\Itinerary;
use Illuminate\Http\Request;


class ItinerariesController extends Controller
{
    public function index(Itinerary $i)
    {
        $itineraries = Itinerary::get();
        $attributes = array_keys($itineraries[0]->toArray());

        return view('itineraries.index')->with(['dataset' => $itineraries, 'attributes' => $attributes, 'controller' => 'itineraries', 'key' => $i->getKeyName()]);
    }
}
