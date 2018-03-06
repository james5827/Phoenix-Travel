<form method="POST" action="{{ url($action) }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="Trip_Id">Trip Id</label>
        <input type="text" class="form-control" name="Trip_Id" id="Trip_Id" value="{{ old('Trip_Id', $trip->Trip_Id) }}" placeholder="Trip Id">
    </div>

    @include('partials._error', ['field' => 'Trip_Id'])

    @include('partials._selectbox_generator')


    <div class="form-group">
        <label for="Departure_Date">Departure Date</label>
        <input type="datetime-local" class="form-control" name="Departure_Date" id="Departure_Date" value="{{ old('Departure_Date', $trip->Departure_Date) }}" placeholder="Trip Departure Date">
    </div>

    @include('partials._error', ['field' => 'Departure_Date'])

    <div class="form-group">
        <label for="Max_Passengers">Maximum Passengers</label>
        <input type="number" class="form-control" name="Max_Passengers" id="Max_Passengers" value="{{ old('Max_Passengers', $trip->Max_Passengers) }}" placeholder="Maximum Passengers For Trip">
    </div>

    @include('partials._error', ['field' => 'Max_Passengers'])

    <div class="form-group">
        <label for="Standard_Amount">Standard Amount</label>
        <input type="text" class="form-control" name="Standard_Amount" id="Standard_Amount" value="{{ old('Standard_Amount', $trip->Standard_Amount) }}" placeholder="Standard Amount For Trip">
    </div>

    @include('partials._error', ['field' => 'Standard_Amount'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>