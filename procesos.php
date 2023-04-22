<?php
include("class/sql.php");
include("class/lobobicis.php");

$id = isset($_POST["id"])? $_POST["id"]: "";
$nom = isset($_POST["nom"])? $_POST["nom"]: "";
$lt = isset($_POST["lt"])? $_POST["lt"]: "";
$lg = isset($_POST["lg"])? $_POST["lg"]: "";
$estado = isset($_POST["estado"])? $_POST["estado"]: "";

$c = new lobobicis();
$c->crear($id, $nom, $lt, $lg, $estado);

?>

