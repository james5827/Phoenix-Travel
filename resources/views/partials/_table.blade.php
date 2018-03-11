@if(! empty($attributes))
    <div class="table-responsive">
        <form method="POST" action="" id="table_delete_form">
            {{ csrf_field() }}
            {{ method_field("delete") }}
            <table class="table-condensed table-bordered table-hover" id="responsiveTable">
                <thead>
                    <tr>
                        @foreach($attributes as $attribute)
                            <td class="bg-dark text-light border-dark">{{ str_replace("_", " ", $attribute) }}</td>
                        @endforeach
                    </tr>
                </thead>
                    <tbody>
                    @foreach($dataset as $data)
                        {{ $data->Itinerary_No }}
                        <tr class="clickable-table-data row-link" data-href="{{ $controller."/"}}@foreach($key as $k){{ $data->$k }}/@endforeach">
                            @foreach($attributes as $attribute)
                                <td class="largetd">{{ $data->$attribute }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </form>
    </div>
@endif

@push('scripts')
    <script src="{{ asset('/js/responsivetable.js') }}"></script>
@endpush
