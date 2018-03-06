<form action="{{ url($action) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="Rego_No">Registration Number:</label>
        <input type="text" class="form-control" name="Rego_No" id="Rego_No" value="{{ old('Rego_No', $vehicle->Rego_No) }}" placeholder="Registration Number">
    </div>

    @include('partials._error', ['field' => 'Rego_No'])

    <div class="form-group">
        <label for="VIN">Vehicle Identification Number:</label>
        <input type="text" class="form-control" name="VIN" id="VIN" value="{{ old('VIN', $vehicle->VIN) }}" placeholder="Vehicle Identification Number">
    </div>

    @include('partials._error', ['field' => 'VIN'])

    <div class="form-group">
        <label for="Make">Vehicle Make:</label>
        <input type="text" class="form-control" name="Make" id="Make" value="{{ old('Make', $vehicle->Make) }}" placeholder="Make">
    </div>

    @include('partials._error', ['field' => 'Make'])

    <div class="form-group">
        <label for="Model">Vehicle Model:</label>
        <input type="text" class="form-control" name="Model" id="Model" value="{{ old('Model', $vehicle->Model) }}" placeholder="Model">
    </div>

    @include('partials._error', ['field' => 'Model'])

    <div class="form-group">
        <label for="Year">Year:</label>
        <input type="number" class="form-control" name="Year" id="Year" value="{{ old('Year', $vehicle->Year) }}" placeholder="Year">
    </div>

    @include('partials._error', ['field' => 'Year'])

    <div class="form-group">
        <label for="Capacity">Vehicle Capacity</label>
        <input type="number" class="form-control" name="Capacity" id="Capactiy" value="{{ old('Capacity', $vehicle->Capacity) }}" placeholder="Capacity">
    </div>

    @include('partials._error', ['field' => 'Capacity'])

    @include('partials._selectbox_generator')

    @include('partials._error', ['field' => 'Fuel_Type'])

    <div class="form-group">
        <label for="Equipment">Equipment:</label>
        <textarea class="form-control" name="Equipment" id="Equipment" placeholder="Required Vehicle Equipment">{{ old('Equipment', $vehicle->Equipment) }}</textarea>
    </div>

    @include('partials._error', ['field' => 'Equipment'])

    <div class="form-group">
        <label for="License_Required">License Required</label>
        <input type="text" class="form-control" name="License_Required" id="License_Required" value="{{ old('License_Required', $vehicle->License_Required) }}" placeholder="License Required">
    </div>

    @include('partials._error', ['field' => 'License_Required'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>