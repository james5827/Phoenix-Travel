<form action="{{ url($action) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="Trip_Booking_No">Trip Booking Number</label>
        <input type="number" class="form-control" name="Trip_Booking_No" id="Trip_Booking_No" value="{{ old('Trip_Booking_No', $Trip_Booking->Trip_Booking_No) }}" placeholder="Trip Booking Number">
    </div>

    @include('partials._error', ['field' => 'Trip_Booking_No'])

    @include('partials._selectbox_generator')

    <div class="form-group">
        <label for="Booking_Date">Date Of Booking</label>
        <input type="date" class="form-control" name="Booking_Date" id="Booking_Date" value="{{ old('Booking_Date', $Trip_Booking->Booking_Date) }}" placeholder="Booking Date">
    </div>

    @include('partials._error', ['field' => 'Booking_Date'])

    <div class="form-group">
        <label for="Deposit_Amount">Deposit_Amount</label>
        <input type="text" class="form-control" name="Deposit_Amount" id="Deposit_Amount" value="{{ old('Deposit_Amount', $Trip_Booking->Deposit_Amount) }}" placeholder="Deposit">
    </div>

    @include('partials._error', ['field' => 'Deposit_Amount'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>