@if(! empty($attributes))
    <table class="table table-bordered table-hover" id="responsiveTable">
        <thead>
        <tr>
            @foreach($attributes as $attribute)
                <td>{{ $attribute }}</td>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($dataset as $data)
            <tr  class="clickable-table-data" data-href="{{ url($controller."/".$data->$key) }}">
                @foreach($attributes as $attribute)
                    <td>{{ $data->$attribute }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endif