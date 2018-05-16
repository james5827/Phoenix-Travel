<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItineraryRequest;
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

    public function show($tour_No, $day_No)
    {
        $itinerary = Itinerary::where('Tour_No', '=', $tour_No )->where('Day_No', '=', $day_No)->first();
        $itinerary->load('tour');

        $tour_parent = '/tours/' . $itinerary->getRelation('tour')->Tour_no;

        $parent_relations = ['Tour_No' => $tour_parent];

        return view('itineraries.show')->with(['record' => $itinerary, 'parent_relations' => $parent_relations, 'controller' => 'itineraries']);
    }

    public function create(Itinerary $itinerary)
    {
        $tour_sel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ['Tour_No' => $tour_sel];


        return view('itineraries.create')->with(['itinerary' => $itinerary, 'method' => 'POST', 'action' => 'itineraries/store', 'select_boxes' => $select_boxes]);
    }

    public function store(ItineraryRequest $request)
    {
        Itinerary::create($request->all());

        return redirect('itineraries');
    }

    public function edit($tour_No, $day_No)
    {
        $itinerary = Itinerary::where('Tour_No', '=', $tour_No )->where('Day_No', '=', $day_No)->first();

        $tour_sel = Tour::select(['Tour_No', 'Tour_Name'])->get()->toArray();

        $select_boxes = ['Tour_No' => $tour_sel];

        return view('itineraries.edit')->with(['itinerary' => $itinerary, 'method' => 'PUT', 'action' => 'itineraries/' . $tour_No . '/' . $day_No . '/update', 'select_boxes' => $select_boxes]);
    }

    public function update(ItineraryRequest $request, $tour_no, $day_no)
    {
        $itinerary = Itinerary::where('Tour_No', '=', $tour_no)->where('Day_No', '=', $day_no);

        $itinerary->update($request->except('_token', '_method'));

        return redirect('/itineraries/');
    }

    public function destroy($tour_no, $day_no)
    {
        $itinerary = Itinerary::where('Tour_No', '=', $tour_no)->where('Day_No', '=', $day_no);

        try {
            $itinerary->delete();
         }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/itineraries/');
    }
}
