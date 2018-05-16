<form action="{{ url($action) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field($method) }}

    <div class="form-group">
        <label for="Name">Name:</label>
        <input id="Name" type="text" class="form-control{{ $errors->has('Name') ? ' is-invalid' : '' }}" name="Name" value="{{ old('Name') }}">
    </div>

    @include('partials._error', ['field' => 'Name'])

    <div class="form-group">
        <label for="Email">E-Mail Address</label>
        <input id="Email" type="Email" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" name="Email" value="{{ old('email') }}">
    </div>

    @include('partials._error', ['field' => 'Email'])

    <div class="form-group">
        <label for="Password">Password</label>
        <input id="Password" type="password" class="form-control{{ $errors->has('Password') ? ' is-invalid' : '' }}" name="Password">
    </div>

    @include('partials._error', ['field' => 'Password'])

    <div class="form-group">
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="Password_confirmation">
    </div>

    <div class="form-group">
        <label for="Authorisation_Level">Authorisation Level</label>
        <input id="Authorisation_Level" type="text" class="form-control{{ $errors->has('auth') ? ' is-invalid' : '' }}" name="Authorisation_Level">
    </div>

    @include('partials._error', ['field' => 'Tour_no'])

    <div class="text-center">
        <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
        <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Commit</button>
    </div>
</form>