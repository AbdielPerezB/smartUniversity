<?php
session_start();

if(isset($_SESSION["nom"]))
{
    if($_SESSION["nom"] == "adminlobobici@alumno.buap.mx")
    {
       // echo "hola: " . $_SESSION["nom"];

    }
    else
    {
        header("Location: login.php");
    }
}
else
{
     header("Location: login.php");
    
}
?>