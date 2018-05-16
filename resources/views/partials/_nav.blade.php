<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Phoenix Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tours') }}">Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/itineraries') }}">Itineraries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/vehicles') }}">Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/trips') }}">Trips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/trip_bookings') }}">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/customers') }}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/staff') }}">Staff</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>