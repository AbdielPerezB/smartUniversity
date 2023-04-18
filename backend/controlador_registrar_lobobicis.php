<?php

if (!empty($_POST["crear"])) {
  if (empty($_POST["nom"]) or empty($_POST["lt"]) or empty($_POST["lg"]) or empty($_POST["estado"])) {
    echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
        <div class="badge bg-warning col-sm-9 mb-3 mt-3" style="font-size: 18px;"> Uno de los campos esta vacio </div>
      </div>';

  } else {
    $nom = $_POST["nom"];
    $lt = $_POST["lt"];
    $lg = $_POST["lg"];
    $estado = $_POST["estado"];

    $sql = $conexion->query("insert into lobobicis(nom, lt, lg, estado) values ('" . $nom . "','" . $lt . "','" . $lg . "','" . $estado . "')");
    // 1 -> Correctamente , 0 -> Chale

    if ($sql == 1) {
      echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
            <div class="badge bg-success col-sm-9 mb-3 mt-3" style="font-size: 18px;">Caseta registrada correctamente </div>
          </div>';
    } else {
      echo '<div style="display: flex; align-items: center; justify-content: center; height: 10vh;">
            <div class="badge bg-danger col-sm-9 mb-3 mt-3" style="font-size: 18px;">Error al registrar </div>
          </div>';
    }
  }
}
?>