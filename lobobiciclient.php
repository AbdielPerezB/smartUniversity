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
        .fondo
        {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat, no-repeat;
            background-color: #00385c;
        }
	
		#map {
			height: 500px;
			width: 700px;
			display: block; margin: 0 auto
		}
	</style>
</head>
<body class="fondo">
<nav class="navbar navbar-expand-md navbar-dark bg-success">
    <!-- navbar->clase para que booystrap sepa que es un nav -->
    <!-- navbar-expand-md->el menu colapsa en mediano -->
    <!-- navbar-dark->estilo del nav -->
    <!-- bg-success->background color success del nav -->
    <div class="container-fluid">
      <!-- Bootstrap siempre recomienda un container fluid para el nav -->

  <ul class="navbar-nav flex-row flex-wrap">
  <li class="nav-item">
            <!-- icono -->
            <a class="navbar-brand" href="#"> </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown">Disponible</a>
            <!-- Creando un submenu. POr eso se les pone dropdown, dropdown-toggle, id, role y data-bs-toggle-->
            <ul class="dropdown-menu bs-success-text-emphasis"> <!-- le indicamos que es un submenu con dropdown-menu -->
              <!-- A continuación tambipen le ponemos las clases a las etiquetas a -->
              <li><a class="dropdown-item" href="">DAE</a></li>
              <li><a class="dropdown-item" href="">CAALE</a></li>
              <li><a class="dropdown-item" href="">Computación</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </nav>


          <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES"
      defer
    ></script>
	<script>


function initMap() {
            //18.9998822,-98.2019775
  const lugar = { lat: 18.9998822, lng: -98.2019775 };
  const map = new google.maps.Map(document.getElementById("map"), {
    scaleControl: true,
    center: lugar,
    zoom: 16,
  });
  const infowindow = new google.maps.InfoWindow();

  const marker = new google.maps.Marker({ map, position: { lat: 18.9981147, lng: -98.1952396 } });
  const marker2 = new google.maps.Marker({ map, position: { lat: 19.0003148, lng: -98.1952657 } });
  const marker3= new google.maps.Marker({ map, position: { lat: 19.0011248, lng: -98.1972553 } });
  const marker4= new google.maps.Marker({ map, position: { lat: 19.0015828, lng: -98.1998915 } });
  const marker5= new google.maps.Marker({ map, position: { lat: 19.0027278, lng: -98.2024768 } });
  const marker6= new google.maps.Marker({ map, position: { lat: 19.0028093, lng: -98.2031376 } });
  const marker7= new google.maps.Marker({ map, position: { lat: 19.0035506, lng: -98.2038778 } });
  const marker8= new google.maps.Marker({ map, position: { lat: 19.004805, lng: -98.2050865 } });
  const marker9= new google.maps.Marker({ map, position: { lat: 19.0049292, lng: -98.2035041 } });
  const marker10= new google.maps.Marker({ map, position: { lat: 19.0038878, lng: -98.2017433 } });
  const marker11= new google.maps.Marker({ map, position: { lat: 19.0034665, lng: -98.2003851 } });
  const marker12= new google.maps.Marker({ map, position: { lat: 19.0027784, lng: -98.1987008 } });
  const marker13= new google.maps.Marker({ map, position: { lat: 19.0003055, lng: -98.1944705 } });
  const marker14= new google.maps.Marker({ map, position: { lat: 18.9975427, lng: -98.1958934 } });
  const marker15= new google.maps.Marker({ map, position: { lat: 18.995904, lng: -98.199642 } });
  const marker16= new google.maps.Marker({ map, position: { lat: 18.9958669, lng: -98.2011132 } });
  const marker17= new google.maps.Marker({ map, position: { lat: 18.9974691, lng: -98.2019957 } });
  const marker18= new google.maps.Marker({ map, position: { lat: 18.999261, lng: -98.2036558 } });
  const marker19= new google.maps.Marker({ map, position: { lat: 19.0007156, lng: -98.2025303 } });


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
</body>
</html>
