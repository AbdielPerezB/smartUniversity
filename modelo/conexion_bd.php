<?php

    $conexion = new mysqli("localhost","root","nora2040","smartuniversity","3306");

    //$conexion->set_charset("utf8");

    if(!($link = $conexion )){
        $validar_DB = "no";
    }else{
        $validar_DB = "si";
    }
?>