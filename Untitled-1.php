<!DOCTYPE html>
<html lang="en">

<?php
    if (!empty($_POST["modificar"]))
    {


        $opcionSeleccionada = $_POST['mi-select']; // Obtener la opción seleccionada del select
        $id = $opcionSeleccionada;

        echo "hola";
        function ($id){


            // // Paso 1: Obtener los datos del registro seleccionado
            $sql = "SELECT * FROM lobobicis WHERE id = '$id'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);

            $nom = "";
            $lt = "";
            $lg = "";
            $estado = "";
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nom = $row["nom"];
                    $lt = $row["puesto"];
                    $lg = $row["empresa"];
                    $estado = $row["estado"];
                
                }
            

                $aux = '
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
                        ';
            }
        
        }
    }
?>


<!-- echo $c->modificar($id);

function modificar($id){

    $aux = '
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
    ';
    return $aux;
} -->
















    <div id="map"></div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES"
        defer></script>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.js"></script>

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
                position: { lat: <?php echo $lt; ?>, lng: <?php echo $lg ?> },
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
            location.href = "lobobicima.php"

        }
        function modificar() {
            location.href = "lobobicim.php"
        }
        function eliminar() {
            location.href = "lobobicime.php"
        }

        function selectItem() {
            var x = $("#mi-select").val();
            //alert(x);
            location.href = "lobobicim.php?x=" + x + "&ran=" + Math.random();
        }
    </script>