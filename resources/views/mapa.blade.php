<div id="map"></div>
<script>              
    var map, infoWindow;

    function initMap() {
        console.log(document.getElementById('map'))
        map = new google.maps.Map(document.getElementById('map'), 
        {
            center: {lat: -23.556583, lng: -46.658813},
            zoom: 15
        });

        var icons = {
            profissional: {
            icon: "{{asset('img/worker_30px.png')}}"
            },
            cliente: {
            icon: "{{asset('img/hand_dollar.png')}}"
            }
        };

        var features = [
            {position: new google.maps.LatLng(-23.559203, -46.658943), type: 'cliente'},                 
            {position: new google.maps.LatLng(-23.550887, -46.662143), type: 'profissional'},                 
            {position: new google.maps.LatLng(-23.561184, -46.661664), type: 'cliente'},                 
            {position: new google.maps.LatLng(-23.555060, -46.648190), type: 'profissional'}, 
            {position: new google.maps.LatLng(-23.558428, -46.665875), type: 'cliente'},                
            {position: new google.maps.LatLng(-23.562325, -46.659347), type: 'profissional'},  
            {position: new google.maps.LatLng(-23.550600, -46.648450), type: 'cliente'},  
            {position: new google.maps.LatLng(-23.543919, -46.666496), type: 'profissional'}
        ];

        infoWindow = new google.maps.InfoWindow;

        // Create markers.
        for (var i = 0; i < features.length; i++) {
            var marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: map
            });
            google.maps.event.addListener( marker, 'click', function() {
                //infoWindow.setContent( this.info );
                //infoWindow.open( map, this );
                window.location.href = "{{route('teste_avaliacao')}}";
            });            
        };

        var pos = {lat: -23.556583, lng: -46.658813};
            // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent('Você está aqui');
            infoWindow.open(map);
            map.setCenter(pos);
            }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?'Error: The Geolocation service failed.' :'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);                
    }
</script>