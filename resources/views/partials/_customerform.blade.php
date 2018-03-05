<form method="{{ $method }}" action="{{ $action }}">
    <div class="form-group">
        <label for="customer_id">Customer Id</label>
        <input type="number" class="form-control" name="customer_id" id="customer_id" value="{{ $customer->Customer_Id }}" placeholder="Customer Id">
    </div>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $customer->First_Name }}" placeholder="Customer First Name">
    </div>
    <div class="form-group">
        <label for="middle_initial">Middle Initial</label>
        <input type="text" class="form-control" name="middle_initial" id="middle_initial" value="{{ $customer->Middle_Initial }}" placeholder="Customer Middle Initial">
    </div>
    <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $customer->Last_Name }}" placeholder="Customer Last Name">
    </div>
    <div class="form-group">
        <label for="street_no">Street Number</label>
        <input type="number" class="form-control" name="street_no" id="street_no" value="{{ $customer->Street_No }}" placeholder="Customer Street Number">
    </div>
    <div class="form-group">
        <label for="street_name">Street Name</label>
        <input type="text" class="form-control" name="street_name" id="street_name" value="{{ $customer->Street_Name }}" placeholder="Customer Street Number">
    </div>
    <div class="form-group">
        <label for="suburb">Suburb</label>
        <input type="text" class="form-control" name="suburb" id="suburb" value="{{ $customer->Suburb }}" placeholder="Customer Suburb">
    </div>
    <div class="form-group">
        <label for="postcode">Postcode</label>
        <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $customer->Postcode }}" placeholder="Customer Postcode">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ $customer->Email }}" placeholder="Customer Email">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{ $customer->Phone }}" placeholder="Customer Phone Number">
    </div>

    <div class="form-group">
        <button type="button" class="btn btn-success btn-block" value="">Authorized</button>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>