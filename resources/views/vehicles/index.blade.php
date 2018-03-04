@extends('master')
@section('content')
    <h1>Vehicles</h1>
    @include('partials._table')
@endsection

@section('scripts')
    <script>
        window.onload = addTableEvents;

        function addTableEvents() {
            let table = document.getElementsByTagName('table');

            table[0].addEventListener('mouseleave' , function(){
                let tr = document.getElementsByClassName('createdRow');

                if(tr.length > 0) {
                   table[0].lastElementChild.removeChild(tr[0]);
                }
            })

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
            colspan1.value = 5;
            colspan2.value = 5;



            updateBtn.className = "btn-primary btn btn-block btn-md";
            deleteBtn.className = "btn-danger btn btn-block btn-md";

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

            tr.className = 'createdRow';
            val.parentNode.insertBefore(tr, val.nextSibling);
        }
    </script>
@endsection
