<?php
if (!empty($_POST["guardarCambios"])) {
  if (empty($_POST["nom"]) or empty($_POST["lt"]) or empty($_POST["lg"]) or empty($_POST["estado"])) {
    echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
        <div class="badge bg-warning col-sm-9 mb-3 mt-3" style="font-size: 18px;"> Uno de los campos esta vacio </div>
      </div>';

  } else {
    $opcionSeleccionada = $_POST['mi-select']; // Obtener la opción seleccionada del select
    $id = $opcionSeleccionada;

    // // Obtener los datos del registro seleccionado
    $sql = "SELECT * FROM lobobicis WHERE id = '$id'";
    $result = mysqli_query($link, $sql);


    $nom = $_POST["nom"];
    $lt = $_POST["lt"];
    $lg = $_POST["lg"];
    $estado = $_POST["estado"];

    $sql = $conexion->query("UPDATE lobobicis SET nom='" . $nom . "', lt='" . $lt . "', lg='" . $lg . "', estado='" . $estado . "' WHERE id='" . $id . "'");
    // 1 -> Correctamente , 0 -> Chale
    mysqli_close($link);
    if ($sql == 1) {
      echo '<script>alert("Registro guardado correctamente");</script>';
      //   echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
      // <div class="badge bg-success col-sm-9 mb-3 mt-3" style="font-size: 18px;">Registro modificado correctamente</div>
      // </div>';
      
    } else {
      echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
            <div class="badge bg-danger col-sm-9 mb-3 mt-3" style="font-size: 18px;">Error al modificar el registro </div>
          </div>';
    }
  }
}
?>

