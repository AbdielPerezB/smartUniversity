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

  

  const marker = new google.maps.Marker({ map, position: { lat: 18.9981147, lng: -98.1952396 } });
  const marker2 = new google.maps.Marker({ map, position: { lat: 19.0003148, lng: -98.1952657 } });

  marker.addListener("click", () => {
    infowindow.setContent("lobo bici DAE");
    infowindow.open(map, marker);
  });

  marker2.addListener("click", () => {
    infowindow.setContent("lobo bici Cultura Física");
    infowindow.open(map, marker2);
  });
}

window.initMap = initMap;
    </script>
  </body>
</html>