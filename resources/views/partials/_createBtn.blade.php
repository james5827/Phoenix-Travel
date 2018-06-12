<a class="btn-primary btn btn-block text-light" id="addNew" href="{{ url($controller . "/create") }}">Add New {{ $controller }}</a>

@push('scripts')
<script>let anchor = document.getElementById('addNew');anchor.style.textTransform = 'capitalize';</script>
@endpush
