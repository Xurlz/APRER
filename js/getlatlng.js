

    var lat = '';
    var lng = '';
    var address = "02932060";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
         lat = results[0].geometry.location.lat();
         lng = results[0].geometry.location.lng();
        };
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
    alert('Latitude: ' + lat + ' Logitude: ' + lng);