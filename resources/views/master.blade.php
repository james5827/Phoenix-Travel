<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Phoenix Travel</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials._nav')

<main>
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials._footer')

<script src="{{ asset('/js/jquery.min.js') }}"></script>
</body>

@yield('scripts')
</html>
