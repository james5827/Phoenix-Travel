@push('scripts')
    <script>
        function initMap() {
            let myLatLng = {lat: -25.363, lng: 131.044};

            // Create a map object and specify the DOM element
            // for display.
            let map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 4
            });

            // Create a marker and set its position.
            let marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Hello World!'
            });

            map.data.toGeoJson((data)=>{
                console.log(data);
            });

            map.setCenter(map.getCenter().toJSON());

            console.log(map.getCenter().toJSON());
            console.log(map.markers);
            console.log(JSON.stringify(marker.getPosition()));
        }
    </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA5aMge2ksCksF5BqYiff8gczkr-qcvrI&callback=initMap" async defer></script>
@endpush