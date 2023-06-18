<?php
function marca() {
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect("localhost", "root", "", "smartuniversity", "3306");

  // Realizar la consulta SQL para obtener los datos de las instancias
  $resultado = mysqli_query($conexion, "SELECT * FROM lobobus");

  // Inicializar un contador para asignar un identificador único a cada marcador
  $contador = 0;

  // Iterar sobre los resultados de la consulta y mostrar los marcadores en el mapa
  while ($fila = mysqli_fetch_assoc($resultado)) {
    // Definir las coordenadas para este marcador
    $lt = $fila['lt'];
    $lg = $fila['lg'];

    $nom=$fila['nom'];
    // Mostrar el icono correspondiente al estado
    echo "const marker$contador = new google.maps.Marker({ map, position: { lat: $lt, lng: $lg }, icon: image, title: '$nom' });";

    // Crear la etiqueta con el nombre del marcador y asignar el evento mouseout
    echo "const infowindow$contador = new google.maps.InfoWindow({ content: 'Parada $nom' });";
    echo "marker$contador.addListener('mouseover', () => { infowindow$contador.open(map, marker$contador); });";
    echo "marker$contador.addListener('mouseout', () => { infowindow$contador.close(); });";

    // Incrementar el contador para el siguiente marcador
    $contador++;
  }

  // Cerrar la conexión a la base de datos
  mysqli_close($conexion);
}
?>