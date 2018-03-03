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

        return view('vehicles.index')->with(['vehicles' => $vehicles]);
    }
}
