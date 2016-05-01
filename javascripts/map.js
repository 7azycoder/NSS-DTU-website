jQuery(function($) {
        $(document).ready( function() {

            // load google map
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);

    });
});




function initialize() {
    var mapOptions = {
      zoom: 16,
      center: new google.maps.LatLng(28.7501986,77.1166573)
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);
}
