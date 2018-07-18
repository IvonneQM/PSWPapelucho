function initialize() {
 var blu = new google.maps.LatLng(-23.5814581,-70.380034);
    var col = new google.maps.LatLng(-23.5814581,-70.380034);

    var blumell = {
        zoom     : 14,
        center   : blu,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        zoomControl: false
    };

    var colonias = {
        zoom     : 14,
        center   : col,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        zoomControl: false
    };

    map = new google.maps.Map(document.getElementById('map'), blumell);
    map1 = new google.maps.Map(document.getElementById('maps'), colonias);

    var markerBlu = new google.maps.Marker({
        position: blu,
        map: map,
        title: 'Blumell'
    });
    var markerCol = new google.maps.Marker({
        position: col,
        map: map1,
        title: 'Las colonias'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);




