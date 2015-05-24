
    
var geocoder;
var map;
var marker;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(50.93,5.33);
  marker=new google.maps.Marker({   
          position: latlng
      });
  var mapOptions = {
    zoom: 8,
    center: latlng
  }; 
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);   
}
 
function codeAddress() {
  var address = document.getElementById('location').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      marker.setMap(null);
      marker=new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('locatie bestaat niet');
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);

 