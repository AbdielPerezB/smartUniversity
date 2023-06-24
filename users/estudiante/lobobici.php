<?php
//include "./../../seguridad.php";
//include "./verificarlogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <!-- My css -->
    <link rel="stylesheet" href="./../../css/styleInicio.css" />
    <!-- Iconos del fontawesome -->
    <script src="https://kit.fontawesome.com/66c636a4b6.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>

    <style>   
    #map {
      height: 550px;
      width: 800px;
    }
    #main-space{
        background-color: white;
    }
    .card-disponible{
        border-color: #2ECC71;
    }
    .card-noDisponible{
        border-color: red;
    }
	</style>

</head>
<body>
    <div class="main-container d-flex">
        <?php include "./../../side_nav.php"; ?>

        <!-- Content -->
        <div class="content">
            <!-- navbarHorizontal -->
            <?php include "./../../nav.php"; ?>
            <div id="main-space" class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <select id="opciones" class="form-select form-select-md mb-3 mt-3" aria-label=".form-select-lg example">
                            <option value="0" selected>Todas las casetas</option>
                        <?php
                            include_once __DIR__.'/../../backend/class/post.php';

                            $query = "SELECT id, nom FROM lobobicis ORDER BY nom;";
                            $lobobicis = new Post($query);
                            $response = $lobobicis->getResponse();
                            foreach($response as $row)
                            {
                                echo"<option value='".$row['id']."'>".$row['nom']."</option>";
                            }
                        ?>
                        </select>
                    </div> 
                </div>
                <div id="simbologia-mapa" class="row d-flex justify-content-start">
                    <div id="simbologia" class="col-lg-3 col-xl-3 col-md-12 col-sm-12">
                        <table>
                            <tr>
                                <td><img src="./../../img/bicycle.svg"></td>
                                <td>Casetas disponibles.</td>
                            </tr>
                            <tr>
                                <td><img src="./../../img/bicycleRed.svg"></td>
                                <td>Casetas no disponibles.</td>
                            </tr>
                        </table>
                    </div>
                    <div id="map" class= "col-lg-8 col-xl-8 col-md-12 col-sm-12 me-4"></div>
                </div>
                
                <div id="oneCaseta">
                    <div class="card" style="width: 18rem;">
                        <img src="./../../img/caseta.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-succes">
                            <h5 class="card-title">Caseta</h5>
                            <p class="card-text">Cerrada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES" defer></script>
    <script> 
    function initMap() {
      //18.9998822,-98.2019775
      //mapStyle para no visualizar nos nombres de lugares en el mapa.
      var mapStyle = [{   
        featureType: "poi",
        elementType: "labels",
        stylers: [{ visibility: "off" }],
      },];
      const image3 ="./../../img/bicycle.svg";
      const image2 ="./../../img/bicycleRed.svg";
      //const image3 ="img/bicycleGreen.svg";
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

    <!-- Agregamos el js de bootstrap -->
    <script src="./../../js/bootstrap2.bundle.min.js"> </script>
    <!-- scripts de jquery -->
    <script src="./../../js/jquery-3.6.4.js"></script>
    <script src="./../../js/iniciojs.js"></script>
    <script src="./../../js/selectCasetaLobobici.js" ></script>

    <script>
    $(document).ready(function(){
        $("#li-lobobici").addClass('active')

        $("li#li-inicio a").on('click' , function(){
            $(this).attr("href", "index.php")
        });

        $("li#li-calles a").on('click' , function(){
            $(this).attr("href", "calles.php")
        });

        $("li#li-lobobus a").on('click' , function(){
            $(this).attr("href", "lobobus.php")
        });

        $("li#li-lobobici a").on('click' , function(){
            $(this).attr("href", "lobobici.php")
        });

        $("li#li-horarios a").on('click' , function(){
            $(this).attr("href", "horarios.php")
        });
    });
</script>
</body>

</html>