<?php
  session_start();
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>APRER</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/build/ol.js"></script>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="img/APRERLOGO.png" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="pages/login.php">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Encontre um Profissional</a>
              </li>              
            </ul> 
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="pages/login.php">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/signup.php">Cadastre-se</a>
              </li>
            </ul> 
      </nav>
      <section id="map">
        <script>
          var map, infoWindow;
          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -23.556583, lng: -46.658813},
              zoom: 15
            });

            var icons = {
              profissional: {
                icon: 'img/worker_30px.png'
              },
              cliente: {
                icon: 'img/hand_dollar.png'
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
                 window.location.href = "pages/login.php";
              });            
            };

            //var pos = {lat: -23.556583, lng: -46.658813};

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
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
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaJ17V8D9xyAzg3_kmqeuuLqNrgZPdvL8&callback=initMap">
        </script>
      </section>
      <footer class=" container-fluid text-center bg-footer margin">
        <p class="margin">APRER - Aplicativo Para Resoluções Residenciais  _  Todos os direitos reservados
        <br>Rua Augusta, 1508 - Consolação - Sao Paulo - SP</br></p>
      </footer>
  </body>
</html>