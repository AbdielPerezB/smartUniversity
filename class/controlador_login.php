<?php
session_start();
    if (!empty ($_POST["iniciar"])){
        if (!empty($_POST["Email"]) and !empty($_POST["Password"])){
            
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            
            $sql = $conexion->query(" select * from usuario where correo= '$Email' and pass='$Password' ");
            // 1 -> Correctamente , 0 -> Chale

            if ($datos = $sql->fetch_object()){
                $_SESSION["id"]=$datos->id;
                // $_SESSION["nom"]=$datos->nom;
                // $_SESSION["app"]=$datos->app;
                // $_SESSION["apm"]=$datos->apm;
                // $_SESSION["matricula"]=$datos->matricula;
                // $_SESSION["tipo"]=$datos->tipo;
               
                header("location: lobobicima.php");
            }else{
                echo " <div class = 'alert alert-danger'> Acceso denegado </div>";
            }
            
    
        }else{
            echo "Campos vacios";
        }
    }
?>