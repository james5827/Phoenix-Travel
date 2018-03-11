<form action="" method="POST" id="table_delete_form">
    {{ method_field("delete") }}
    {{ csrf_field() }}
    <table class="table-condensed table-bordered table-hover" id="responsiveTable">
        <thead>
        <tr>
            @foreach($record->getAttributes() as $key => $data)
                <td class="bg-dark text-light border-dark">{{ str_replace("_", " ", $key) }}</td>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr class="clickable-table-data"
            @if(is_array($record->getKeyName()))
                data-href="/{{ $record->getTable() }}/@foreach($record->getKeyName() as $val){{ $record[$val] }}/@endforeach"
            @else
                data-href="/{{ $record->getTable() }}/{{ $record[$record->getKeyName()] }}/"
            @endif>

            @foreach($record->getAttributes() as $key => $data)
                <td class="largetd">{{ $data }}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</form>

@push('scripts')
    <script src="{{ asset('/js/responsivetable.js') }}"></script>
@endpush