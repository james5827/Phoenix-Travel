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
            @yield('content')
        </div>
    </div>
</main>

@include('partials._footer')

<script src="{{ asset('/js/jquery.min.js') }}"></script>
</body>
</html>
