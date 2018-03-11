<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
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

    public function show(Tour $tour)
    {
        return view('tours.show')->with(['record' => $tour]);
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
        return view('tours.edit')->with(['tour' => $tour, 'method' => 'PUT', 'action' => 'tours/' . $tour->Tour_no . '/update']);
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
