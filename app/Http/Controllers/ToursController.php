<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function index(Tour $t)
    {
        $tours = Tour::get();
        $attributes = array_keys($tours[0]->toArray());
        return view('tours.index')->with(['dataset' => $tours, 'attributes' => $attributes, 'controller' => 'tours', 'key' => [$t->getKeyName()]]);
    }
}
