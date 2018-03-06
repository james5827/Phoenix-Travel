<form method="POST" action="{{ url($action) }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="Day_No">Tour Day Number</label>
        <input type="number" class="form-control" name="Day_No" id="Day_No" value="{{ old('Day_No', $itinerary->Day_No) }}" placeholder="Tour Day Number">
    </div>

    @include('partials._error', ['field' => 'Day_No'])

    <div class="form-group">
        <label for="Hotel_Booking_No">Hotel Booking Number</label>
        <input type="number" class="form-control" name="Hotel_Booking_No" id="Hotel_Booking_No" value="{{ old('Hotel_Booking_No', $itinerary->Hotel_Booking_No) }}" placeholder="Hotel Booking Number">
    </div>

    @include('partials._error', ['field' => 'Hotel_Booking_No'])

    <div class="form-group">
        <label for="Activities">Activities</label>
        <input type="text" class="form-control" name="Activities" id="Activities" value="{{ old('Activities', $itinerary->Activities) }}" placeholder="Activities">
    </div>

    @include('partials._error', ['field' => 'Activities'])

    <div class="form-group">
        <label for="Meals">Meals</label>
        <input type="text" class="form-control" name="Meals" id="Meals" value="{{ old('Meals', $itinerary->Meals) }}" placeholder="Itinerary Meals">
    </div>

    @include('partials._error', ['field' => 'Meals'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>