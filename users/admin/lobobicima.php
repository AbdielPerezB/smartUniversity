<?php
/*
session_start();
if (empty($_SESSION["id"])) {
  header("location: login.php");
}
*/
?>
<html dir="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Caseta</title>
  <link rel="stylesheet" href="./../../css/bootstrap.min.css">
  <link rel="shortcut icon" href="./../../img/favicon.ico" type="image/vnd.microsoft.icon">


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
  <style>
    .contenedor {
      padding-top: 10px;
      padding-right: 20px;
      padding-left: 20px;
      padding-bottom: 50px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      height: 110%;
    }

    .fondo {}

    #map {
      height: 200%;
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

<body class="fondo">
  <div class="container col-sm-5 mb-3 mt-3">
    <div class="contenedor">
      <?php
      include("menu.php");
      include("modelo/conexion_bd.php");
      include("class/controlador_registrar_lobobicis.php");
      ?>
      <div class="row">
        <!-- <div class="col-12 col-sm-4"></div>
                    <div class="col-12 col-sm-4"> -->
        <form method="post" action="">

          <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nom" name="nom">
          </div>
          <div class="mb-3 mt-3">
            <label for="lt" class="form-label">Mueva el icono a la ubicación de la caseta:</label>
            <!-- <label for="lt" class="form-label">Latitud:</label> -->
            <input type="hidden" class="form-control" id="lt" name="lt">
          </div>
          <div class="mb-3 mt-3">
            <!-- <label for="lg" class="form-label">Longitud:</label> -->
            <input type="hidden" class="form-control" id="lg" name="lg">
          </div>
          <div class="mb-3 mt-3" style="display: none;">
            <!-- <label for="estado" class="form-label">Estado:</label> -->
            <input type="hidden" class="form-control" id="estado" value="1" name="estado">
          </div>
          <div class="mb-3 mt-3">
            <div id="map"></div>
          </div>
          <!-- <button type="Button" class="btn btn-primary form-control"onclick="enviar()">Crear</button> -->
          <input class="btn btn-primary form-control" type="submit" value="Crear" name="crear">
        </form>
      </div>
    </div>
  </div>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES"
    defer></script>
  <script src="./../../js/jquery-3.6.3.min.js"></script>
  <script src="./../../js/bootstrap.js"></script>
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
    function pinta() {
      document.getElementById("lt").value = marker.getPosition().lat();
      document.getElementById("lg").value = marker.getPosition().lng();
    }

    window.initMap = initMap;
  </script>
  <script>
    $(document).ready(function () {
      $("#btn1").attr("disable", true);
    });
    function salir() {
      location.href = "salir.php"
    }
    function agregar() {
      // location.href="lobobicima.php"
      location.href = "lobobicima.php"
    }
    function modificar() {
      location.href = "lobobicim.php"
    }
    function eliminar() {
      location.href = "lobobicime.php"
    }
    function abrir() {
      location.href = "lobobicio.php"
    }
    
  </script>
</body>

</html>