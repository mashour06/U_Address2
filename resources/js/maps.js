$(document).ready(function(){

    // initially, point to cairo, egypt
    // var latitude = 30.061963;
    // var longitude = 31.236877;
    // var latlng = {lat : latitude, lng : longitude};
    // document.getElementById('latlng').value = JSON.stringify(latlng);

    var lat_lng = document.getElementById('latlng').value;
    if(lat_lng) {
        var latlng_obj = JSON.parse(lat_lng);
        latitude = latlng_obj.lat;
        longitude = latlng_obj.lng;
    } else {
        latitude = 30.061963;
        longitude = 31.236877;
        lat_lng = JSON.stringify({lat: latitude, lng: longitude});
    }

    // Creating map object
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 12,
        center: new google.maps.LatLng(latitude, longitude),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // creates a draggable marker to the given coords
    var vMarker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        draggable: true
    });

    // adds a listener to the marker
    // gets the coords when drag event ends
    // then updates the input with the new coords
    google.maps.event.addListener(vMarker, 'dragend', function (evt) {
        var lat = evt.latLng.lat().toFixed(6);
        var lng = evt.latLng.lng().toFixed(6);
        var latlng = {lat : lat, lng : lng};

        $('#latlng').val(JSON.stringify(latlng));

        map.panTo(evt.latLng);
    });

    // centers the map on markers coords
    map.setCenter(vMarker.position);

    // adds the marker on the map
    vMarker.setMap(map);

    $('#map-submit').click(function(){
        var lat_lng = document.getElementById('latlng').value;
        if(lat_lng) {
            var latlng_obj = JSON.parse(lat_lng);
            $.ajax({
                url: 'http://api.positionstack.com/v1/reverse',
                data: {
                    access_key: '1ca9c2e30826158f019f16052acb1b7f',
                    query: latlng_obj.lat + ',' + latlng_obj.lng,
                    output: 'json',
                    limit: 1,
                }
            }).done(function(data) {
                let addr_data = data.data[0];
                document.getElementById('address_line1').value = addr_data.name;
                document.getElementById('address_line2').value = addr_data.street;
                document.getElementById('city').value = addr_data.region;
                document.getElementById('district').value = addr_data.county;
                document.getElementById('zip').value = addr_data.postal_code;
                document.getElementById('country').value = addr_data.country;
            });
        }

    });

});



