@if(! empty($attributes))
    <div class="table-responsive">
        <table class="table-condensed table-bordered table-hover" id="responsiveTable">
            <thead>
            <tr>
                @foreach($attributes as $attribute)
                    <td class="bg-dark text-light border-dark">{{ $attribute }}</td>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($dataset as $data)
                <tr  class="clickable-table-data" data-href="{{ url($controller."/".$data->$key) }}">
                    @foreach($attributes as $attribute)
                        <td class="largetd">{{ $data->$attribute }}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif