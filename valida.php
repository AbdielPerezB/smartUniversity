<?php
session_start();
$user = isset($_POST["Email"])?$_POST["Email"]:"";
$pass = isset($_POST["Password"])?$_POST["Password"]:"";

if($user == "adminlobobici@alumno.buap.mx" && $pass = "adminlobobici")
{
    $_SESSION["nom"] = "adminlobobici@alumno.buap.mx";
    header("Location: index.php");

}
else
{
    header("Location: login.php");
}
?>