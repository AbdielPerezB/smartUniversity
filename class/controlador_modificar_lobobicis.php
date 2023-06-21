<?php
if (!empty($_POST["modificar"])) {

  // $link = mysqli_connect("localhost", "root", "", "smartuniversity");

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

}
?>
