<?php
if (!empty($_POST["eliminar"])) 
{
    $opcionSeleccionada = $_POST['mi-select']; // Obtener la opción seleccionada del select

    $id = $opcionSeleccionada;

    // Paso 2: Eliminar el registro de la base de datos
    //$sql2 = "DELETE FROM lobobicis WHERE id = '$id'";
    $sql2 = "UPDATE lobobicis SET eliminado = 1 WHERE id = '$id';";
    if (mysqli_query($link, $sql2)) {
         echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro";
    }
    
}
?>