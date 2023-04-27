<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title>Lobobici parte del cliente</title>
 
	<meta charset="UTF-8">
  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<style>
        /* .fondo
        {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat, no-repeat;
            background-color: #00385c;
        } */
	
		#map {
			height: 550px;
			width: 800px;
			display: block; margin: 0 auto
		}
	</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES" defer></script>
<body class="fondo">

    <div id="map"></div>
    <!-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES"
      defer
    ></script> -->
    
	<script> 


function initMap() {
  
            //18.9998822,-98.2019775
            //mapStyle para no visualizar nos nombres de lugares en el mapa.
   var mapStyle = [
   {
      featureType: "poi",
      elementType: "labels",
      stylers: [{ visibility: "off" }],
    },
   ];
     
  const image ="img/bicycle.svg";
  const image2 ="img/bicycleRed.svg";
  const image3 ="img/bicycleGreen.svg";
  const lugar = { lat: 18.9998822, lng: -98.2019775 };
  const map = new google.maps.Map(document.getElementById("map"), {
    scaleControl: true,
    center: lugar,
    zoom: 16,
    styles: mapStyle,
  });
  const infowindow = new google.maps.InfoWindow();

  <?php
include 'icondis.php'; // Incluye el archivo funciones.php
marca(); // Llama a la función para marcar las casetas en el mapa
marca2();
marca3();
marca4();
marca5();
marca6();
marca7();
marca8();
marca9();
marca10();
marca11();
marca12();
marca13();
marca14();
marca15();
marca16();
marca17();
marca18();
marca19();
?>

 marker.addListener("click", () => {
   infowindow.setContent("lobo bici DAE");
   infowindow.open(map, marker);
 });

 marker2.addListener("click", () => {
   infowindow.setContent("lobo bici Cultura Física");
   infowindow.open(map, marker2);
 });

 marker3.addListener("click", () => {
   infowindow.setContent("lobo bici CAALE");
   infowindow.open(map, marker3);
 });

 marker4.addListener("click", () => {
   infowindow.setContent("lobo bici Administración");
   infowindow.open(map, marker4);
 });

 marker5.addListener("click", () => {
   infowindow.setContent("lobo bici Electrónica");
   infowindow.open(map, marker5);
 });

 marker6.addListener("click", () => {
   infowindow.setContent("lobo bici Ingeniería");
   infowindow.open(map, marker6);
 });

 marker7.addListener("click", () => {
   infowindow.setContent("lobo bici Teatro al Aire Libre");
   infowindow.open(map, marker7);
 });

 marker8.addListener("click", () => {
   infowindow.setContent("lobo bici Computación / PLU");
   infowindow.open(map, marker8);
 });

 marker9.addListener("click", () => {
   infowindow.setContent("lobo bici Laboratorios Ciencias Químicas");
   infowindow.open(map, marker9);
 });

 marker10.addListener("click", () => {
   infowindow.setContent("lobo bici Instituto de Física");
   infowindow.open(map, marker10);
 });

  marker11.addListener("click", () => {
    infowindow.setContent("lobo bici Físico Matemáticas");
    infowindow.open(map, marker11);
  });

  marker12.addListener("click", () => {
    infowindow.setContent("lobo bici Derecho");
    infowindow.open(map, marker12);
  });

  marker13.addListener("click", () => {
    infowindow.setContent("lobo bici Puerta 1:24 Sur");
    infowindow.open(map, marker13);
  });

  marker14.addListener("click", () => {
    infowindow.setContent("lobo bici STU");
    infowindow.open(map, marker15);
  });

  marker15.addListener("click", () => {
    infowindow.setContent("lobo bici Unidad de Seminarios");
    infowindow.open(map, marker15);
  });

  marker16.addListener("click", () => {
    infowindow.setContent("lobo bici Biblioteca Central");
    infowindow.open(map, marker16);
  });

  marker17.addListener("click", () => {
    infowindow.setContent("lobo bici Multiaulas");
    infowindow.open(map, marker17);
  });

  marker18.addListener("click", () => {
    infowindow.setContent("lobo bici Contaduria");
    infowindow.open(map, marker18);
  });

  marker19.addListener("click", () => {
    infowindow.setContent("lobo bici COMDE");
    infowindow.open(map, marker19);
  });

}

window.initMap = initMap;
</script>
</head>
<body class="fondo">
  <div id="map"></div>
</body>
</html>
