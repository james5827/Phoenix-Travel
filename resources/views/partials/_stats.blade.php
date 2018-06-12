@section('right-col')
    <div class="card" style="position: fixed; width: 15.15%; margin-top: 2.5vh;">
        <div class="card-header">
            <h2>Statistics</h2>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach($stats as $key => $val)
                    <li class="list-group-item">{{ $key . $val }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection