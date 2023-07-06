

<html dir="ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Caseta</title>
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
      height: 120%;
    }

    .fondo {}

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

    /* Para Ocultar Boton de Modificar */
    .hidden {
      display: none;
    }
  </style>
</head>
</head>

<body class="fondo">
  <div class="container col-sm-5 mb-3 mt-3">
    <div class="contenedor">
      <?php
      $idItem = isset($_GET["x"]) ? $_GET["x"] : "2";
      include("menu.php");
      include("modelo/conexion_bd.php");
      include("class/controlador_modificar_lobobicis.php");
      include("lista_desp.php");

      ?>

      <div class="row">
        <form method="post" action="">
          <!-- <div class="d-grid contenedor"> -->
          <div class="form-floating mb-3 mt-3">
            <select class="form-select" id="mi-select" name="mi-select" aria-label="Floating label select example"
              onchange="selectItem()">
              <?php
              echo $option_del_select;
              $opcionSeleccionada = $_POST['mi-select']; // Obtener la opción seleccionada del select
              $id = $opcionSeleccionada;

              // Obtener los datos del registro seleccionado
              $sql = "SELECT * FROM lobobicis WHERE id = '$id'";
              $result = mysqli_query($link, $sql);
              $row = mysqli_fetch_assoc($result);

              $nom = $row["nom"];
              $lt = $row["lt"];
              $lg = $row["lg"];

              mysqli_close($link);
              ?>
            </select>
            <div class="mb-1 mt-1">
              <input class="btn btn-success" type="submit" value="Enviar">
            </div>
            <label for="floatingSelect">Seleccione una Caseta</label>
          </div>

          <div class="mb-3 mt-3">
            <label for="nom" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom ?>">
          </div>
          <div class="mb-3 mt-3">
            <label for="lt" class="form-label">Mueva el icono a la ubicación de la caseta:</label>
            <input type="hidden" class="form-control" id="lt" name="lt" value="<?php echo $lt ?>">
          </div>
          <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" id="lg" name="lg" value="<?php echo $lg ?>">
          </div>
          <div class="mb-3 mt-3" style="display: none;">
            <input type="hidden" class="form-control" id="estado" value="1" name="estado">
          </div>
          <div class="mb-3 mt-3">
            <div id="map"></div>
          </div>

          <body>
            <input id="btnGuardarCambios" class="btn btn-success form-control" type="submit" value="Guardar Cambios"
              name="guardarCambios" style="margin-bottom: 30px;">
          </body>
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
        position: { lat: <?php echo $lt ?>, lng: <?php echo $lg ?> },
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
    function agregar() {
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
    

    function selectItem() {
      var x = $("#mi-select").val();
      //alert(x);
      location.href = "lobobicim.php?x=" + x + "&ran=" + Math.random();
    }
  </script>
</body>

</html>