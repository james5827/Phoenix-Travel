<form action="" method="POST" id="table_delete_form">
    {{ method_field("delete") }}
    {{ csrf_field() }}
    <table class="table table-bordered table-hover" id="responsiveTable">
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
                data-href="/{{ $controller }}/@foreach($record->getKeyName() as $val){{ $record[$val] }}/@endforeach"
            @else
                data-href="/{{ $controller }}/{{ $record[$record->getKeyName()] }}/"
            @endif>

            @foreach($record->getAttributes() as $key => $data)
                <td class="largetd" id="{{ $key }}">{{ $data }}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</form>

@push('scripts')
    <script src="{{ asset('/js/responsivetable.js') }}"></script>

    @if(isset($parent_relations))
        <script>
            let parent_relation;
            let anchor;
            @foreach($parent_relations as $key => $val)
                 parent_relation = document.getElementById("{{ $key }}");
                 anchor = document.createElement("a");
                 parent_relation.insertBefore(anchor, parent_relation.firstChild);
                 anchor.appendChild(parent_relation.lastChild);
                 anchor.setAttribute("href", "{{url($val)}}");
                 anchor.setAttribute("class", "row-link");
            @endforeach
        </script>
    @endif
@endpush


