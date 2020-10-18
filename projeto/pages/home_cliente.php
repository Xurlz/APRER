<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>APRER</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
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
    <body class="tex">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">
            <img src="../img/APRERLOGO.png" width="150">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="solicitacao.php">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Encontre um Profissional</a>
                </li>
                
              </ul>
              <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                  <a class="nav-link">Olá, <?php echo strtoupper($_SESSION["nome"]) ?></a>
                </li>
                <li class="nav-item border border-dark rounded">
                  <a class="nav-link" href="logout.php">Sair</a>
                </li>
              </ul> 
            </div>
          <button type="submit" class="btn btn-default" id="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </nav>
          <section id="map">
            <script>
              var map, infoWindow, contentString;

              function getMarkerInfo(profissao, nome, id){ 
                var contentString = 
                '<div id="content">'+
                '<form name="login" method="post" action="solicitacao.php">'+
                '<div class="form-group"><h4 id="ramo_profissional" name="ramo_profissional">'+profissao+'</h4></div>'+
                '<input type="hidden" id="hidden" name="ramo_profissional" value="'+profissao+'">'+
                '<div class="form-group"><h6 id="nome_profissional">'+nome+'</h6></div>'+
                '<input type="hidden" id="hidden" name="nome_profissional" value="'+nome+'">'+
                '<input type="hidden" id="hidden" name="cod_profissional" value="'+id+'">'+
                '<div class="form-group"><button type="submit" class="btn btn-warning" >Solicitar</button></div>'+
                '</form>'+
                '</div>';

                return contentString;
              }
              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: -23.556583, lng: -46.658813},
                  zoom: 15
                });

              var features = [
                {position: new google.maps.LatLng(-23.559203, -46.658943), nome: "João", profissao: "Alvenaria", cod: 86},                 
                {position: new google.maps.LatLng(-23.550887, -46.662143), nome: "Maria", profissao: "Instalação", cod: 87},                 
                {position: new google.maps.LatLng(-23.561184, -46.661664), nome: "José", profissao: "Reparo", cod: 88},                 
                {position: new google.maps.LatLng(-23.555060, -46.648190), nome: "Carlos", profissao: "Hidraulica", cod: 89}, 
                {position: new google.maps.LatLng(-23.558428, -46.665875), nome: "Ana", profissao: "Reparo", cod: 90},                
                {position: new google.maps.LatLng(-23.562325, -46.659347), nome: "Laura", profissao: "Pintura", cod: 91},  
                {position: new google.maps.LatLng(-23.550600, -46.648450), nome: "Pedro", profissao: "Eletrica", cod: 92},  
                {position: new google.maps.LatLng(-23.543919, -46.666496), nome: "Sandro", profissao: "Alvenaria", cod: 93},
              ];

              infoWindow = new google.maps.InfoWindow({
                  content: contentString,
                });

              // Create markers.
              for (var i = 0; i < features.length; i++) {
                var marker = new google.maps.Marker({
                  position: features[i].position,
                  map: map,
                  //info: contentString,
                  info: getMarkerInfo(features[i].profissao, features[i].nome, features[i].cod),
                  icon: '../img/worker_30px.png'
                });
                google.maps.event.addListener( marker, 'click', function() {  
                   infoWindow.setContent( this.info );
                   infoWindow.open( map, this );
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