<form method="{{ $method }}" action="{{ url($action) }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="Rego_No">Registration Number:</label>
        <input type="text" class="form-control" name="Rego_No" id="Rego_No" value="{{ $vehicle->Rego_No }}" placeholder="Registration Number">
    </div>
    <div class="form-group">
        <label for="Vin">Vehicle Identification Number:</label>
        <input type="text" class="form-control" name="Vin" id="Vin" value="{{ $vehicle->VIN }}" placeholder="Vehicle Identification Number">
    </div>
    <div class="form-group">
        <label for="Make">Vehicle Make:</label>
        <input type="text" class="form-control" name="Make" id="Make" value="{{ $vehicle->Make }}" placeholder="Make">
    </div>
    <div class="form-group">
        <label for="Model">Vehicle Model:</label>
        <input type="text" class="form-control" name="Make" id="Make" value="{{ $vehicle->Model }}" placeholder="Model">
    </div>
    <div class="form-group">
        <label for="Year">Year:</label>
        <input type="number" class="form-control" name="Year" id="Year" value="{{ $vehicle->Year }}" placeholder="Year">
    </div>
    <div class="form-group">
        <label for="Capacity">Vehicle Capacity</label>
        <input type="number" class="form-control" name="Capacity" id="Capactiy" value="{{ $vehicle->Capacity }}" placeholder="Capacity">
    </div>

    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="equipment">Equipment:</label>
        <textarea class="form-control" name="equipment" id="equipment" placeholder="Required Vehicle Equipment">{{ $vehicle->Equipment }}</textarea>
    </div>
    <div class="form-group">
        <label for="license_required">License Required</label>
        <input type="text" class="form-control" name="license_required" id="license_required" value="{{ $vehicle->License_Required }}" placeholder="License Required">
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>