$(document).ready(function(){

    var latitude = document.getElementById('txtLat').value;
    var longitude = document.getElementById('txtLng').value;

    // console.log(latitude + ' ' + longitude);

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
        $("#txtLat").val(evt.latLng.lat().toFixed(6));
        $("#txtLng").val(evt.latLng.lng().toFixed(6));

        map.panTo(evt.latLng);
    });

    // centers the map on markers coords
    map.setCenter(vMarker.position);

    // adds the marker on the map
    vMarker.setMap(map);
});


$('#map-submit').click(function(){
    let the_lat = $("#txtLat").val();
    let the_lng = $("#txtLng").val();
    $.ajax({
        url: 'http://api.positionstack.com/v1/reverse',
        data: {
            access_key: '1ca9c2e30826158f019f16052acb1b7f',
            query: the_lat + ',' + the_lng,
            output: 'json',
            limit: 1,
        }
    }).done(function(data) {
        let obj = JSON.parse(JSON.stringify(data));
        console.log(obj);
        document.getElementById('address_line1').value = obj.data[0].name;
        document.getElementById('address_line2').value = obj.data[0].street;
        document.getElementById('city').value = obj.data[0].region;
        document.getElementById('district').value = obj.data[0].county;
        document.getElementById('zip').value = obj.data[0].postal_code;
        document.getElementById('country').value = obj.data[0].country;
    });
});
