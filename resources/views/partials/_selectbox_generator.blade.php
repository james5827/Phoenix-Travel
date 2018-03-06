@foreach($select_boxes as $key => $select_box)
    <div class="form-group">
        <label for="{{ $key }}">{{ $key }}</label>
        <select class="form-control" name="{{ $key }}" id="{{ $key }}">
            @foreach($select_box as $select_line)
                <option value="{{ current($select_line) }}">@foreach($select_line as $select_line_data){{ $select_line_data }} @endforeach</option>
            @endforeach
        </select>
    </div>
@endforeach

