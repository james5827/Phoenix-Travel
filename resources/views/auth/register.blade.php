@extends('master')

@section('content')
                <h1>Register</h1>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="auth">Authorisation Level</label>

                                <input id="auth" type="text" class="form-control{{ $errors->has('auth') ? ' is-invalid' : '' }}" name="auth" required>

                                @if ($errors->has('auth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('auth') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-danger col-sm-5" style="margin: 2.5%;">Clear</button>
                            <button type="submit" class="btn btn-primary col-sm-5" style="margin: 2.5%;">Register</button>
                        </div>
                    </form>
                </div>
</div>
@endsection
