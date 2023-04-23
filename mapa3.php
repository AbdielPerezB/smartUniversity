<html dir="es">
  <head>
    <title>Right-to-Left Languages</title>
   

    <style>
        #map {
        height: 100%;
        }

        /* 
        * Optional: Makes the sample page fill the window. 
        */
        html,
        body {
        height: 100%;
        margin: 0;
        padding: 0;
        }
    </style>
  </head>
  <body>
    <input type="text" name="lt" id="lt">
    <br>
    <input type="text" name="lg" id="lg">
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES"
      defer
    ></script>
    <script>
        
function initMap() {
            //18.9998822,-98.2019775

  const lugar = { lat: 18.9998822, lng: -98.2019775 };
  const map = new google.maps.Map(document.getElementById("map"), {
    scaleControl: true,
    center: lugar,
    zoom: 17,
  });
  const infowindow = new google.maps.InfoWindow();

  

 marker = new google.maps.Marker({
    map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: { lat: 18.9998822, lng: -98.2019775 },
  });
  marker.addListener("click", toggleBounce);
  marker.addListener("mouseup", pinta);
}

function toggleBounce() {
  document.getElementById("lt").value = marker.getPosition().lat();
  document.getElementById("lg").value = marker.getPosition().lng();
  console.log(marker.getPosition().lat());
  console.log(marker.getPosition().lng());
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);

  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);

  }
}
function pinta()
{
  document.getElementById("lt").value = marker.getPosition().lat();
  document.getElementById("lg").value = marker.getPosition().lng();
}

window.initMap = initMap;
    </script>
  </body>
</html>