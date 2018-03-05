<form method="{{ $method }}" action="{{ url($action) }}">
    <div class="form-group">
        <label for="Rego_No">Registration Number:</label>
        <input type="text" class="form-control" name="Rego_No" id="Rego_No" value="{{ $vehicle->Rego_No }}" placeholder="Registration Number">
    </div>
    <div class="form-group">
        <label for="vin">Vehicle Identification Number:</label>
        <input type="text" class="form-control" name="vin" id="vin" value="{{ $vehicle->VIN }}" placeholder="Vehicle Identification Number">
    </div>
    <div class="form-group">
        <label for="make">Vehicle Make:</label>
        <input type="text" class="form-control" name="make" id="make" value="{{ $vehicle->Make }}" placeholder="Make">
    </div>
    <div class="form-group">
        <label for="model">Vehicle Model:</label>
        <input type="text" class="form-control" name="model" id="model" value="{{ $vehicle->Model }}" placeholder="Model">
    </div>
    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" name="year" id="year" value="{{ $vehicle->Year }}" placeholder="Year">
    </div>
    <div class="form-group">
        <label for="capacity">Vehicle Capacity</label>
        <input type="number" class="form-control" name="capacity" id="capactiy" value="{{ $vehicle->Capacity }}" placeholder="Capacity">
    </div>
    <div class="form-group">
        <label for="fuel_type">Fuel Type</label>
        <select class="form-control" name="fuel_type" id="fuel_type">
            <option>Petrol</option>
            <option>Diesel</option>
        </select>
    </div>
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