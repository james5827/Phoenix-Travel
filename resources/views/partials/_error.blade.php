@if(count($errors->get($field)))
    <div class="alert alert-danger alert-dismissible clear">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($errors->get($field) as $error)
            {{ $error }}
        @endforeach
    </div>
@endif