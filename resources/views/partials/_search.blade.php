<form>
    <div class="form-group">
        <h3>Search For A Record</h3>
        <input type="search" id="searchTable" name="search" class="form-control" placeholder="Search {{ $controller }}"/>
    </div>
</form>

@push('scripts')
<script>
    (function(){
        let search = document.getElementById("searchTable");
        let trs = document.getElementsByTagName('tr');
        let trsArrayLength = trs.length;

        {{--let table = document.getElementById({{ $id }});--}}
        let table = document.getElementsByTagName('table')[0];

        table.addEventListener("transitionend", (event)=>{
            if(event.target.style.opacity === "0")
                event.target.style.display = "none";
        });

        search.onkeyup = ()=>{
            let searchRegEx = new RegExp(search.value);

            if(search.value !== '') {
                for (let i = 1; i < trsArrayLength; ++i) {
                    let tds = trs[i].getElementsByTagName('td');
                    let match = false;

                    for (let x = 0; x < tds.length; ++x) {
                        if (searchRegEx.test(tds[x].textContent)) {
                            match = true;
                            let split = tds[x].textContent.split(searchRegEx);
                            let htmlString = "";
                            for (let i = 0; i < split.length; ++i) {
                                htmlString += split[i];
                                if (split.length - 1 !== i)
                                    htmlString += `<span style="background-color: #2ede4d; font-weight: bolder; padding: 2px; color: #FFFFFF;border-radius: 5px;">${search.value}</span>`;
                            }
                            tds[x].innerHTML = htmlString;
                        }
                    }

                    if (match) {
                        trs[i].style.display = "table-row";
                        window.setTimeout(()=>{
                            trs[i].style.opacity = 1;
                        },0);
                    } else {
                        trs[i].style.opacity = 0;
                    }
                }
            }
            else {
                for(let i = 1; i<trsArrayLength; ++i) {
                    trs[i].style.display = "table-row";
                    let tds = Array.from(trs[i].getElementsByTagName('td'));

                    for(let i = 0; i<tds.length; ++i){
                        tds[i].innerHTML = tds[i].textContent;
                    }

                    trs[i].style.display = "table-row";
                    window.setTimeout(()=>{
                        trs[i].style.opacity = 1;
                    },0);
                }
            }
        }
    })();
</script>
@endpush