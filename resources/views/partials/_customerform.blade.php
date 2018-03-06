<form method="POST" action="{{ url($action) }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="Customer_Id">Customer Id</label>
        <input type="number" class="form-control" name="Customer_Id" id="Customer_Id" value="{{ old('Customer_Id', $customer->Customer_Id) }}" placeholder="Customer Id">
    </div>

    @include('partials._error', ['field' => 'Customer_Id'])

    <div class="form-group">
        <label for="First_Name">First Name</label>
        <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{ old('First_Name', $customer->First_Name) }}" placeholder="Customer First Name">
    </div>

    @include('partials._error', ['field' => 'First_Name'])

    <div class="form-group">
        <label for="Middle_Initial">Middle Initial</label>
        <input type="text" class="form-control" name="Middle_Initial" id="Middle_Initial" value="{{ old('Middle_Initial', $customer->Middle_Initial) }}" placeholder="Customer Middle Initial">
    </div>

    @include('partials._error', ['field' => 'Middle_Initial'])

    <div class="form-group">
        <label for="Last_Name">Last Name</label>
        <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{ old('Last_Name', $customer->Last_Name) }}" placeholder="Customer Last Name">
    </div>

    @include('partials._error', ['field' => 'Last_Name'])

    <div class="form-group">
        <label for="Street_No">Street Number</label>
        <input type="number" class="form-control" name="Street_No" id="Street_No" value="{{ old('Street_No', $customer->Street_No) }}" placeholder="Customer Street Number">
    </div>

    @include('partials._error', ['field' => 'Street_No'])

    <div class="form-group">
        <label for="Street_Name">Street Name</label>
        <input type="text" class="form-control" name="Street_Name" id="Street_Name" value="{{ old('Street_Name', $customer->Street_Name) }}" placeholder="Customer Street Number">
    </div>

    @include('partials._error', ['field' => 'Street_Name'])

    <div class="form-group">
        <label for="Suburb">Suburb</label>
        <input type="text" class="form-control" name="Suburb" id="Suburb" value="{{ old('Suburb', $customer->Suburb) }}" placeholder="Customer Suburb">
    </div>

    @include('partials._error', ['field' => 'Suburb'])

    <div class="form-group">
        <label for="Postcode">Postcode</label>
        <input type="text" class="form-control" name="Postcode" id="Postcode" value="{{ old('Postcode', $customer->Postcode) }}" placeholder="Customer Postcode">
    </div>

    @include('partials._error', ['field' => 'Trip_Booking_No'])

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" name="Email" id="Email" value="{{ old('Email', $customer->Email) }}" placeholder="Customer Email">
    </div>

    @include('partials._error', ['field' => 'Postcode'])

    <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" class="form-control" name="Phone" id="Phone" value="{{ old('Phone', $customer->Phone) }}" placeholder="Customer Phone Number">
    </div>

    @include('partials._error', ['field' => 'Phone'])

    <div class="form-group">
        <button type="button" class="btn btn-success btn-block" value="">Authorized</button>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>