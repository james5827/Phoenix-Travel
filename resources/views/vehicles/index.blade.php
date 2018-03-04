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
                let div1 = tr[0].firstElementChild.firstElementChild;
                let div2 = tr[0].lastElementChild.firstElementChild;

                let height = 40;
                if(tr.length > 0) {

                    setTimeout(function(div1, div2, tr){
                        let interval = setInterval(function(div1, div2, tr){
                            div1.style.height = height + 'px';
                            div2.style.height = height + 'px';

                            --height;

                            if(height === 0)
                            {
                                clearInterval(interval)
                                tr.parentNode.removeChild(tr);
                            }
                        }, 5, div1, div2, tr);
                    }, 250, div1, div2, tr[0]);
                }
            });

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

                        if(tr[0] === val.nextElementSibling)
                        {

                        }
                        else
                        {
                            createTableElements(val);


                            tr = document.getElementsByClassName('createdRow');

                            let newtr;
                            let oldtr;
                            if(tr.length === 1)
                            {
                                newtr = tr[0];

                                let div1 = newtr.firstElementChild.firstElementChild;
                                let div2 = newtr.lastElementChild.firstElementChild;

                                let height1 = 0;


                                let interval = setInterval(function(div1, div2){
                                    div1.style.height = height1 + 'px';
                                    div2.style.height = height1 + 'px';


                                    ++height1;

                                    if(height1 === 40)
                                    {
                                        clearInterval(interval)
                                    }
                                }, 5, div1, div2);

                            }else if(tr[0] === val.nextElementSibling)
                            {
                                newtr = tr[0];
                                oldtr = tr[1];
                                minonemaxother(newtr, oldtr, val);
                            }
                            else
                            {
                                newtr = tr[1];
                                oldtr =tr[0];

                                minonemaxother(newtr, oldtr, val);
                            }
                        }

                    }, 500, this);

                });

                tableRows[i].addEventListener('mouseleave', function(){
                    clearTimeout(timeout);
                });
            }
        }

        function minonemaxother(newtr, oldtr, val)
        {
            let div1 = newtr.firstElementChild.firstElementChild;
            let div2 = newtr.lastElementChild.firstElementChild;

            let div3 = oldtr.firstElementChild.firstElementChild;
            let div4 = oldtr.lastElementChild.firstElementChild;


            let height1 = 0;
            let height2 = 40;
            let interval = setInterval(function(div1, div2, oldtr){
                div1.style.height = height1 + 'px';
                div2.style.height = height1 + 'px';

                div3.style.height = height2 +'px';
                div4.style.height = height2 +'px';

                ++height1;
                --height2;

                if(height2 === 0)
                {
                    val.parentNode.removeChild(oldtr);
                }
                if(height1 === 40)
                {
                    clearInterval(interval)
                }
            }, 5, div1, div2, oldtr);
        }

        function createTableElements(val){
            let tr = document.createElement('tr');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');

            let div1 = document.createElement('div');
            let div2 = document.createElement('div');

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

            div1.appendChild(updateBtn);
            div2.appendChild(deleteBtn);

            div1.style.overflow = 'hidden';
            div2.style.overflow = 'hidden';

            div1.style.height='0px';
            div2.style.height='0px';


            td1.appendChild(div1);
            td2.appendChild(div2);
            tr.appendChild(td1);
            tr.appendChild(td2);

            tr.className = 'createdRow';
            val.parentNode.insertBefore(tr, val.nextSibling);
        }
    </script>
@endsection
