<form action="{{ url($action) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="Tour_no">Tour Number</label>
        <input type="number" class="form-control" name="Tour_no" id="Tour_no" value="{{ old('Tour_no', $tour->Tour_no) }}" placeholder="Tour Number">
    </div>

    @include('partials._error', ['field' => 'Tour_no'])

    <div class="form-group">
        <label for="Tour_Name">Tour Name</label>
        <input type="text" class="form-control" name="Tour_Name" id="Tour_Name" value="{{ old('Tour_Name', $tour->Tour_Name) }}" placeholder="Tour Name">
    </div>

    @include('partials._error', ['field' => 'Tour_Name'])

    <div class="form-group">
        <label for="Description">Tour Description</label>
        <textarea class="form-control" name="Description" id="Description">{{ old('Description', $tour->Description) }}</textarea>
    </div>

    @include('partials._error', ['field' => 'Description'])

    <div class="form-group">
        <label for="Duration">Duration</label>
        <input type="number" class="form-control" name="Duration" id="Duration" value="{{ old('Duration', $tour->Duration) }}" placeholder="Tour Duration">
    </div>

    @include('partials._error', ['field' => 'Duration'])

    <div class="form-group">
        <label for="Route_Map">Route Map</label>
        <input type="text" class="form-control" name="Route_Map" id="Route_Map" value="{{ old('Route_Map', $tour->Route_Map) }}" placeholder="Route Map">
    </div>

    @include('partials._error', ['field' => 'Route_Map'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>