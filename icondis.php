<?php
function disp() {
 
// Realizar la consulta SQL para obtener los datos de la instancia
$resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 1");

// Mostrar los datos en la página web
// if ($fila = mysqli_fetch_assoc($resultado)) {
//     echo "ID: " . $fila['id'] . "<br>";
//     echo "Nombre: " . $fila['nombre'] . "<br>";

    // Mostrar el icono correspondiente al estado
    if ($fila['estado'] == 1) {
        echo '<img src="\smartUniversity\imgdisp.svg">';
    } else {
        echo '<img src="\smartUniversity\imgnodisp.svg">';
    }
} //}
?>