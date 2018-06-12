@extends('master')
@section('content')
    <h1>{{ $tour->tour_name }}</h1>
    <h2>Tour Number: {{ $tour->tour_no }} <span style="float: right">Duration: {{ $tour->duration }} Days.</span></h2>

    <div class="RouteMapDiv" id="map" style="margin-top: 2em; margin-bottom: 1em">

    </div>

    <br>
    <h3>Description:</h3>
    <h3>{{ $tour->description }}</h3>

    <div class="row" style="color: white; padding-top: 2em;">
        <div class="col-sm">
            <a class="btn-primary btn btn-block btn-md" href="/tours/{{ $tour->tour_no }}/edit">Update</a>
        </div>
        <div class="col-sm">
            <form method="POST" action="/tours/{{ $tour->tour_no }}/delete">
                {{ csrf_field() }}
                {{ method_field("delete") }}
                <button class="btn-danger btn btn-block btn-md">Delete</button>
            </form>
        </div>
    </div>

    <hr>

    <h1>Tour Itinerary</h1>

    @if($itineraries->count())
        @include('partials._table', [
            'controller' => 'itineraries',
            'dataset' => $itineraries,
            'attributes' => array_keys($itineraries[0]->toArray()),
            'key' => $itineraries[0]->getKeyName(),
            'id' => 'test2'
        ])
    @else
        <div style="text-align: center">
        <h3>No Itineraries For This Tour</h3>
        <a class="btn-primary btn text-light" id="addNew" href="{{ url('itineraries/create') }}">Add One</a>
        </div>
    @endif


    <hr>

    <h1>Tour Trips</h1>

    @include('partials._table' , [
        'controller' => 'trips',
        'dataset' => $trips,
        'attributes' => array_keys($trips[0]->getAttributes()),
        'key' => [$trips[0]->getKeyName()],
        'id' => 'test1'
    ])

    <hr>

    <h1>Tour Reviews</h1>

    @include('partials._table', [
        'controller' => 'reviews',
        'dataset' => $reviews,
        'attributes' => array_keys($reviews[0]->getAttributes()),
        'key' => $reviews[0]->getKeyName(),
        'id' => 'test'
    ])


@endsection

@include('partials._stats', ['stats' => $stats])

@include('partials._map_script')