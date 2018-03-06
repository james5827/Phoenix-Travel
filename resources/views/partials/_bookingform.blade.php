<form action="{{ $action }}" method="{{ $method }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="Trip_Booking_No">Trip Booking Number</label>
        <input type="number" class="form-control" name="Trip_Booking_No" id="Trip_Booking_No" value="{{ $Trip_Booking->Trip_Booking_No }}" placeholder="Trip Booking Number">
    </div>

    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="Booking_Date">Date Of Booking</label>
        <input type="date" class="form-control" name="Booking_Date" id="Booking_Date" value="{{ $Trip_Booking->Booking_Date }}" placeholder="Booking Date">
    </div>

    <div class="form-group">
        <label for="Deposit_Amount">Deposit_Amount</label>
        <input type="text" class="form-control" name="Deposit_Amount" id="Deposit_Amount" value="{{ $Trip_Booking->Deposit_Amount }}" placeholder="Deposit">
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>