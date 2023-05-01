<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title>Lobobici parte del cliente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>
	<style>
        /* .fondo
        {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat, no-repeat;
            background-color: #00385c;
        } */
        #map {
    height: 550px;
    width: 800px;
    display: block; 
    margin: 0 auto;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
	</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES" defer></script>
<body class="fondo">
    <div id="map"></div>
    <div id="simbologia" style="position: absolute; top: 10px; right: 10px;">
        <table>
            <tr>
                <td><img src="img/bicycleGreen.svg"></td>
                <td>Casetas disponibles.</td>
            </tr>
            <tr>
                <td><img src="img/bicycleRed.svg"></td>
                <td>Casetas no disponibles.</td>
            </tr>
        </table>
    </div>
	<script> 
function initMap() {
    //18.9998822,-98.2019775
    //mapStyle para no visualizar nos nombres de lugares en el mapa.
   var mapStyle = [
   {
      featureType: "poi",
      elementType: "labels",
      stylers: [{ visibility: "off" }],
    },
   ];
  const image ="img/bicycle.svg";
  const image2 ="img/bicycleRed.svg";
  const image3 ="img/bicycleGreen.svg";
  const lugar = { lat: 18.9998822, lng: -98.2019775 };
  const map = new google.maps.Map(document.getElementById("map"), {
    scaleControl: true,
    center: lugar,
    zoom: 16,
    styles: mapStyle,
  });
  const infowindow = new google.maps.InfoWindow();
  <?php
include 'icondis.php'; // Incluye el archivo funciones.php
marca(); // Llama a la función para marcar las casetas en el mapa
?>
}
window.initMap = initMap;
</script>
</head>
</div>
</body>
</html>
