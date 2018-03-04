@extends('master')
@section('content')
    <h1>Vehicles</h1>
    @include('partials._table')
@endsection

@section('scripts')
    <script>
        window.onload = addTableEvents;

        function addTableEvents() {
            let tableRows = document.querySelectorAll('.clickable-table-data');

            for(let i =0; i<tableRows.length; ++i)
            {
                tableRows[i].addEventListener('click', function(){
                    window.location = this.dataset.href;
                });

                let timeout;
                tableRows[i].addEventListener('mouseenter', function () {

                    timeout = setTimeout(function(val){
                        let tr = document.getElementsByClassName('createdRow');

                        if(tr.length > 0) {
                            val.parentNode.removeChild(tr[0]);
                        }

                        createTableElements(val);
                    }, 500, this);

                });

                 tableRows[i].addEventListener('mouseleave', function(){
                     clearTimeout(timeout);
                 });
            }
        }

        function createTableElements(val){
            let tr = document.createElement('tr');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            let updateBtn = document.createElement('button');
            let deleteBtn = document.createElement('button');
            let colspan1 = document.createAttribute('colspan');
            let colspan2 = document.createAttribute('colspan');
            let trClass = document.createAttribute('class');
            colspan1.value = 5;
            colspan2.value = 5;
            trClass.value = "createdRow";
            tr.setAttributeNode(trClass);
            td1.setAttributeNode(colspan1);
            td2.setAttributeNode(colspan2);
            let updateBtnText = document.createTextNode('Update')
            let deleteBtnText = document.createTextNode('Delete')

            updateBtn.appendChild(updateBtnText);
            deleteBtn.appendChild(deleteBtnText);
            td1.appendChild(updateBtn);
            td2.appendChild(deleteBtn);
            tr.appendChild(td1);
            tr.appendChild(td2);

            val.parentNode.insertBefore(tr, val.nextSibling);
        }
    </script>
@endsection
