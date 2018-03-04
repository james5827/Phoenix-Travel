@extends('master')
@section('content')
    <h1>Vehicles</h1>
    @include('partials._table')
@endsection

<script>
    window.onload = test;

    function test() {
        let tableRows = document.querySelectorAll('.clickable-table-data');

        for(let i =0; i<tableRows.length; ++i)
        {
            tableRows[i].addEventListener('click', function(){
                window.location = this.dataset.href;
            });
        }
    }
</script>