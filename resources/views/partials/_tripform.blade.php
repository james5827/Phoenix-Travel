<form method="{{ $method }}" action="{{ $action }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="Trip_Id">Trip Id</label>
        <input type="text" class="form-control" name="Trip_Id" id="Trip_Id" value="{{ $trip->Trip_Id }}" placeholder="Trip Id">
    </div>

    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="Departure_Date">Departure Date</label>
        <input type="datetime-local" class="form-control" name="Departure_Date" id="Departure_Date" value="{{ $trip->Departure_Date }}" placeholder="Trip Departure Date">
    </div>

    <div class="form-group">
        <label for="Max_Passengers">Maximum Passengers</label>
        <input type="number" class="form-control" name="Max_Passengers" id="Max_Passengers" value="{{ $trip->Max_Passengers }}" placeholder="Maximum Passengers For Trip">
    </div>

    <div class="form-group">
        <label for="Standard_Amount">Standard Amount</label>
        <input type="text" class="form-control" name="Standard_Amount" id="Standard_Amount" value="{{ $trip->Standard_Amount }}" placeholder="Standard Amount For Trip">
    </div>
</form>