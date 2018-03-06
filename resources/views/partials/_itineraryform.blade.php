<form method="{{ $method }}" action="{{ $action }}">
    {{ csrf_field() }}
    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="Day_No">Tour Day Number</label>
        <input type="number" class="form-control" name="Day_No" id="Day_No" value="{{ $itinerary->Day_No }}" placeholder="Tour Day Number">
    </div>

    <div class="form-group">
        <label for="Hotel_Booking_No">Hotel Booking Number</label>
        <input type="number" class="form-control" name="Hotel_Booking_No" id="Hotel_Booking_No" value="{{ $itinerary->Hotel_Booking_No }}" placeholder="Hotel Booking Number">
    </div>

    <div class="form-group">
        <label for="Activities">Activities</label>
        <input type="text" class="form-control" name="Activities" id="Activities" value="{{ $itinerary->Activities }}" placeholder="Activities">
    </div>

    <div class="form-group">
        <label for="Meals">Meals</label>
        <input type="text" class="form-control" name="Meals" id="Meals" value="{{ $itinerary->Meals }}" placeholder="Itinerary Meals">
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>