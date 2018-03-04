<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

/**
 * Class VehiclesController
 * @package App\Http\Controllers
 *
 *
 */
class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::get();
        $v = New \App\Vehicle;
        $attributes = array_keys($vehicles[0]->toArray());

        return view('vehicles.index')->with(['dataset' => $vehicles, 'attributes' => $attributes, 'controller' => 'vehicles', 'key' => $v->getKeyName()]);
    }
}
