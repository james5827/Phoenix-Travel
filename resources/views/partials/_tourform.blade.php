<form action="{{ $action }}" method="{{ $method }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="tour_number">Tour Number</label>
        <input type="number" class="form-control" name="tour_number" id="tour_number" value="{{ $tour->Tour_no }}" placeholder="Tour Number">
    </div>

    <div class="form-group">
        <label for="tour_name">Tour Name</label>
        <input type="text" class="form-control" name="tour_name" id="tour_name" value="{{ $tour->Tour_Name }}" placeholder="Tour Name">
    </div>

    <div class="form-group">
        <label for="description">Tour Description</label>
        <textarea class="form-control" name="description" id="description">{{ $tour->Description }}</textarea>
    </div>

    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="number" class="form-control" name="duration" id="duration" value="{{ $tour->Duration }}" placeholder="Tour Duration">
    </div>

    <div class="form-group">
        <label for="route_map">Route Map</label>
        <input type="text" class="form-control" name="route_map" id="route_map" value="{{ $tour->Route_Map }}" placeholder="Route Map">
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>