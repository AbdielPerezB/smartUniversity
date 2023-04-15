<!DOCTYPE html>
<html>
<head>
	<title>Lobobici parte del cliente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
	<style>
        .fondo
        {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat, no-repeat;
            background-color: #00385c;
        }
		.dropdown {
			position: relative;
			display: inline-block;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			z-index: 1;
		}
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		#map {
			height: 500px;
			width: 700px;
			display: block; margin: 0 auto
		}
	</style>
</head>
<body class="fondo">
	<div class="dropdown">
		<button>Casetas disponibles</button>
		<div class="dropdown-content">
			<ul>
				<li>Caseta: </li>
				<li>Caseta:</li>
				<li>Caseta:</li>
			</ul>
		</div>
	</div>
	<div class="dropdown">
		<button>Casetas no disponibles</button>
		<div class="dropdown-content">
			<ul>
				<li>Caseta: </li>
				<li>Caseta:</li>
				<li>Caseta:</li>
			</ul>
		</div>
	</div>
	<div id="map"></div>
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

		// function initMap() {
		// 	const lugar = { lat: 18.9998822, lng: -98.2019775 };
  		// 	const map = new google.maps.Map(document.getElementById("map"), {
    	// 	scaleControl: true,
    	// 	center: lugar,
    	// 	zoom: 16,
  		// 	});
 		// 	const infowindow = new google.maps.InfoWindow();
		// 	/*var geocoder = new google.maps.Geocoder();
		// 	var address = 'Benemérita Universidad Autónoma de Puebla';
		// 	geocoder.geocode({ 'address': address }, function(results, status) {
		// 		if (status == 'OK') {
		// 			var myLatLng = {lat: 18.9991275, lng: -98.2015344};
		// 			var map = new google.maps.Map(document.getElementById('map'), {
		// 				zoom: 12,
		// 				center: myLatLng
		// 			});
		// 			var marker = new google.maps.Marker({
		// 				position: myLatLng,
		// 				map: map,
		// 				title: 'Benemérita Universidad Autónoma de Puebla'
		// 			});
		// 		} else {
		// 			alert('No se pudo obtener la ubicación: ' + status);
		// 		}
		// 	});*/
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjb7q0iaGczXVMR75hiNFyNb-hsbH0Xm8&callback=initMap&v=weekly&language=es&region=ES" async defer></script>
</body>
</html>
