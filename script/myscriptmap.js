var myCenter=new google.maps.LatLng(3.0818459,101.5863762);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:6,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Le Meilleur Cafe"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);