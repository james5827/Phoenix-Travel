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
                {{ $data->Itinerary_No }}
                <tr  class="clickable-table-data" data-href="{{ $controller."/"}}@foreach($key as $k){{ $data->$k }}/@endforeach">
                    @foreach($attributes as $attribute)
                        <td class="largetd">{{ $data->$attribute }}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif

@push('scripts')
<script src="{{ asset('/js/responsivetable.js') }}"></script>
@endpush
