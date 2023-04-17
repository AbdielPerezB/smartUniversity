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
			height: 400px;
			width: 100%;
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
			var geocoder = new google.maps.Geocoder();
			var address = 'Benemérita Universidad Autónoma de Puebla';
			geocoder.geocode({ 'address': address }, function(results, status) {
				if (status == 'OK') {
					var myLatLng = {lat: 18.9991275, lng: -98.2015344};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 12,
						center: myLatLng
					});
					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: 'Benemérita Universidad Autónoma de Puebla'
					});
				} else {
					alert('No se pudo obtener la ubicación: ' + status);
				}
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
</body>
</html>