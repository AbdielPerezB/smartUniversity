
//Para imprimir los errores en la pantalla
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// function marca() {
//   // Establecer la conexión a la base de datos
//   $conexion = mysqli_connect("localhost", "root", "", "smartuniversity", "3306");

//   // Definir las coordenadas
//   $coordenadas = [
//     ['lat' => 18.9981147, 'lng' => 	-98.1952396],
//     ['lat' => 19.0003148, 'lng' => -98.1952657],
//     ['lat' => 19.0011248, 'lng' => -98.1972553],
//     ['lat' => 19.0015828, 'lng' => -98.1998915],
//     ['lat' => 19.0027278, 'lng' => -98.2024768],
//     ['lat' => 19.0028093, 'lng' => -98.2031376],
//     ['lat' => 19.0035506, 'lng' => -98.2038778],
//     ['lat' => 19.0048050, 'lng' => -98.2050865],
//     ['lat' => 19.0049292, 'lng' => -98.2035041],
//     ['lat' => 19.0038878, 'lng' => -98.2017433],
//     ['lat' => 19.0034665, 'lng' => -98.2003851],
//     ['lat' => 19.0027784, 'lng' => -98.1987008],
//     ['lat' => 19.0003055, 'lng' => -98.1944705],
//     ['lat' => 18.9975427, 'lng' => -98.1958934],
//     ['lat' => 18.9959040, 'lng' => -98.1996420],
//     ['lat' => 18.9958669, 'lng' => -98.2011132],
//     ['lat' => 18.9974691, 'lng' => -98.2019957],
//     ['lat' => 18.9992610, 'lng' => -98.2036558],
//     ['lat' => 19.0007156, 'lng' => -98.2025303]
//   ];

//   // for para imprimir las marcas en el mapa de acuerdo con la base de datos
//   for ($i = 0; $i <= count($coordenadas); $i++) {
//     // Realizar la consulta SQL para obtener los datos de la instancia
//     $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = " . ($i+1));

//     // Obtener los datos de la instancia y asignarlos a la variable $fila
//     $fila = mysqli_fetch_assoc($resultado);

//     // Mostrar el icono correspondiente al estado
//     if ($fila['estado'] == 1) {
//       echo "const marker$i = new google.maps.Marker({ map, position: { lat: {$coordenadas[$i]['lat']} }, icon: image3 });";
//     } else {
//       echo "const marker$i = new google.maps.Marker({ map, position: { lat: {$coordenadas[$i]['lat']} }, icon: image2 });";
//     }
//   }
//       // Cerrar la conexión a la base de datos
//       mysqli_close($conexion);
// }

// function marca() {
//   //Establecer la conexión a la base de datos
// $conexion = mysqli_connect("localhost", "root", "", "smartuniversity", "3306");

// // Configuración
// const coordenadas = [
//   { lat: 18.9981147, lng: -98.1952396 },
//   { lat: 19.0003148, lng: -98.1952657 },
//   { lat: 19.0011248, lng: -98.1972553 },
//   { lat: 19.0015828, lng: -98.1998915 },
//   { lat: 19.0027278, lng: -98.2024768 },
//   { lat: 19.0028093, lng: -98.2031376 },
//   { lat: 19.0035506, lng: -98.2038778 },
//   { lat: 19.0048050, lng: -98.2050865 },
//   { lat: 19.0049292, lng: -98.2035041 },
//   { lat: 19.0038878, lng: -98.2017433 },
//   { lat: 19.0034665, lng: -98.2003851 },
//   { lat: 19.0027784, lng: -98.1987008 },
//   { lat: 19.0003055, lng: -98.1944705 },
//   { lat: 18.9975427, lng: -98.1958934 },
//   { lat: 18.9959040, lng: -98.1996420 },
//   { lat: 18.9958669, lng: -98.2011132 },
//   { lat: 18.9974691, lng: -98.2019957 },
//   { lat: 18.9992610, lng: -98.2036558 },
//   { lat: 19.0007156, lng: -98.2025303 }
// ];

// //for para imprimir las marcas en el mapa de acuerdo con la base de datos
// for ($i = 0; $i <= count($coordenadas); $i++) {
//   // Realizar la consulta SQL para obtener los datos de la instancia
//   $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = " . ($i+1));
  
//   // Obtener los datos de la instancia y asignarlos a la variable $fila
//   $fila = mysqli_fetch_assoc($resultado);

//   //pto el que lo lea
//   //Mostrar el icono correspondiente al estado
// if ($fila['estado'] == 1) {
//   echo "const marker$i = new google.maps.Marker({ map, position: { lat: {$coordenadas[$i]['lat']}, lng: {$coordenadas[$i]['lng']} }, icon: image3 });";
// } else {
//   echo "const marker$i = new google.maps.Marker({ map, position: { lat: {$coordenadas[$i]['lat']}, lng: {$coordenadas[$i]['lng']} }, icon: image2 });";
// }
//   } 
  
// //Cerrar la conexión a la base de datos
// mysqli_close($conexion);
// }
  
<?php
 function marca() {
   //Establecer la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
     
   //Realizar la consulta SQL para obtener los datos de la instancia
     $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 1");
      
   //Obtener los datos de la instancia y asignarlos a la variable $fila
     $fila = mysqli_fetch_assoc($resultado);
  
   //Mostrar el icono correspondiente al estado
     if ($fila['estado'] == 1) {
       echo 'const marker = new google.maps.Marker({ map, position: { lat: 18.9981147, lng: -98.1952396 }, icon: image3 });';
     } else {
       echo 'const marker = new google.maps.Marker({ map, position: { lat: 18.9981147, lng: -98.1952396 }, icon: image2 });';
     }
      
   //Cerrar la conexión a la base de datos
     mysqli_close($conexion);
   }

  function marca2() {
   //Establecer la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
     
    //Realizar la consulta SQL para obtener los datos de la instancia
     $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 2");
       
    //Obtener los datos de la instancia y asignarlos a la variable $fila
     $fila = mysqli_fetch_assoc($resultado);
   
    //Mostrar el icono correspondiente al estado
     if ($fila['estado'] == 1) {
       echo 'const marker2 = new google.maps.Marker({ map, position: { lat: 19.0003148, lng: -98.1952657 }, icon: image3 });';
     } else {
       echo 'const marker2 = new google.maps.Marker({ map, position: { lat: 19.0003148, lng: -98.1952657 }, icon: image2 });';
     }
       
    //Cerrar la conexión a la base de datos
     mysqli_close($conexion);
  }

  function marca3() {
   //Establecer la conexión a la base de datos
    $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
      
    //Realizar la consulta SQL para obtener los datos de la instancia
     $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 3");
         
    //Obtener los datos de la instancia y asignarlos a la variable $fila
    $fila = mysqli_fetch_assoc($resultado);
     
    //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker3 = new google.maps.Marker({ map, position: { lat: 19.0011248, lng: -98.1972553}, icon: image3 });';
       } else {
         echo 'const marker3 = new google.maps.Marker({ map, position: { lat: 19.0011248, lng: -98.1972553}, icon: image2 });';
       }
         
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
  }

  function marca4() {
    //Establecer la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
          
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 4");
           
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
      
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker4 = new google.maps.Marker({ map, position: { lat: 19.0015828, lng: -98.1998915}, icon: image3 });';
      } else {
        echo 'const marker4 = new google.maps.Marker({ map, position: { lat: 19.0015828, lng: -98.1998915}, icon: image2 });';
      }
           
    //Cerrar la conexión a la base de datos
      mysqli_close($conexion);
    }

  function marca5() {
    //Establecer la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
           
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 5");
           
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
         
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker5 = new google.maps.Marker({ map, position: { lat: 19.0027278, lng: -98.2024768}, icon: image3 });';
      } else {
        echo 'const marker5 = new google.maps.Marker({ map, position: { lat: 19.0027278, lng: -98.2024768}, icon: image2 });';
      }
             
    //Cerrar la conexión a la base de datos
        mysqli_close($conexion);
   } 

  function marca6() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
            
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 6");
               
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
           
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker6 = new google.maps.Marker({ map, position: { lat: 19.0028093, lng: -98.2031376}, icon: image3 });';
      } else {
        echo 'const marker6 = new google.maps.Marker({ map, position: { lat: 19.0028093, lng: -98.2031376}, icon: image2 });';
      }
               
    //Cerrar la conexión a la base de datos
      mysqli_close($conexion);
  }

  function marca7() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
                
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 7");
                 
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
             
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker7 = new google.maps.Marker({ map, position: { lat: 19.0035506, lng: -98.2038778}, icon: image3 });';
      } else {
        echo 'const marker7 = new google.maps.Marker({ map, position: { lat: 19.0035506, lng: -98.2038778}, icon: image2 });';
      }
                 
    //Cerrar la conexión a la base de datos
      mysqli_close($conexion);
  }

  function marca8() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
                  
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 8");
                   
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
               
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker8 = new google.maps.Marker({ map, position: { lat: 19.0048050, lng: -98.2050865}, icon: image3 });';
      } else {
        echo 'const marker8 = new google.maps.Marker({ map, position: { lat: 19.0048050, lng: -98.2050865}, icon: image2 });';
      }
                   
    //Cerrar la conexión a la base de datos
      mysqli_close($conexion);
  }

  function marca9() {
   //Establecer la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
            
    //Realizar la consulta SQL para obtener los datos de la instancia
      $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 9");
                     
    //Obtener los datos de la instancia y asignarlos a la variable $fila
      $fila = mysqli_fetch_assoc($resultado);
                 
    //Mostrar el icono correspondiente al estado
      if ($fila['estado'] == 1) {
        echo 'const marker9 = new google.maps.Marker({ map, position: { lat: 19.0049292, lng: -98.2035041}, icon: image3 });';
      } else {
        echo 'const marker9 = new google.maps.Marker({ map, position: { lat: 19.0049292, lng: -98.2035041}, icon: image2 });';
      }
                     
    //Cerrar la conexión a la base de datos
      mysqli_close($conexion);
  }

  function marca10() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 10");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker10 = new google.maps.Marker({ map, position: { lat: 19.0038878, lng: -98.2017433}, icon: image3 });';
       } else {
         echo 'const marker10 = new google.maps.Marker({ map, position: { lat: 19.0038878, lng: -98.2017433}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca11() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 11");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker11 = new google.maps.Marker({ map, position: { lat: 19.0034665, lng: -98.2003851}, icon: image3 });';
       } else {
         echo 'const marker11 = new google.maps.Marker({ map, position: { lat: 19.0034665, lng: -98.2003851}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }
   
   function marca12() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 12");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker12 = new google.maps.Marker({ map, position: { lat: 19.0027784, lng: -98.1987008}, icon: image3 });';
       } else {
         echo 'const marker12 = new google.maps.Marker({ map, position: { lat: 19.0027784, lng: -98.1987008}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca13() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 13");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker13 = new google.maps.Marker({ map, position: { lat: 19.0003055, lng: -98.1944705}, icon: image3 });';
       } else {
         echo 'const marker13 = new google.maps.Marker({ map, position: { lat: 19.0003055, lng: -98.1944705}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca14() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 14");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker14 = new google.maps.Marker({ map, position: { lat: 18.9975427, lng: -98.1958934}, icon: image3 });';
       } else {
         echo 'const marker14 = new google.maps.Marker({ map, position: { lat: 18.9975427, lng: -98.1958934}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca15() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 15");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker15 = new google.maps.Marker({ map, position: { lat: 18.9959040, lng: -98.1996420}, icon: image3 });';
       } else {
         echo 'const marker15 = new google.maps.Marker({ map, position: { lat: 18.9959040, lng: -98.1996420}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca16() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 16");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker16 = new google.maps.Marker({ map, position: { lat: 18.9958669, lng: -98.2011132}, icon: image3 });';
       } else {
         echo 'const marker16 = new google.maps.Marker({ map, position: { lat: 18.9958669, lng: -98.2011132}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca17() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 17");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker17 = new google.maps.Marker({ map, position: { lat: 18.9974691, lng: -98.2019957}, icon: image3 });';
       } else {
         echo 'const marker17 = new google.maps.Marker({ map, position: { lat: 18.9974691, lng: -98.2019957}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca18() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 18");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker18 = new google.maps.Marker({ map, position: { lat: 18.9992610, lng: -98.2036558}, icon: image3 });';
       } else {
         echo 'const marker18 = new google.maps.Marker({ map, position: { lat: 18.9992610, lng: -98.2036558}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }

   function marca19() {
    //Establecer la conexión a la base de datos
      $conexion = mysqli_connect("localhost","root","","smartuniversity","3306");
             
     //Realizar la consulta SQL para obtener los datos de la instancia
       $resultado = mysqli_query($conexion, "SELECT * FROM lobobicis WHERE id = 19");
                      
     //Obtener los datos de la instancia y asignarlos a la variable $fila
       $fila = mysqli_fetch_assoc($resultado);
                  
     //Mostrar el icono correspondiente al estado
       if ($fila['estado'] == 1) {
         echo 'const marker19 = new google.maps.Marker({ map, position: { lat: 19.0007156, lng: -98.2025303}, icon: image3 });';
       } else {
         echo 'const marker19 = new google.maps.Marker({ map, position: { lat: 19.0007156, lng: -98.2025303}, icon: image2 });';
       }
                      
     //Cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }
   
  ?>
