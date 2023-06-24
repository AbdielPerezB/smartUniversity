<?php
    include("modelo/conexion_bd.php");

    $id = $_GET['id'];
    $estado = $_GET['estado'];

    $sqlo = "update lobobicis set estado=$estado where id=$id";
    
    mysqli_query($conexion, $sqlo);
    header('location:lobobicio.php');
?>