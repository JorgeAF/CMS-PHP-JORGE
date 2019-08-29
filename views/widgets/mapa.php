<style>
	#map {
		width: 100%;
		height: 100%;
	}
</style>

<img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=100x200&maptype=roadmap&key=AIzaSyAjvZCNzSUdg6g5jrOWYodqPLORdJdhsfM&markers=color:blue%7Clabel:Y%7C19.4326077,-99.13320799999997" alt="aqui viene el mapa de google actualizar key google">

<!-- <div id="map"></div> -->
<script>
	var map;
	function initMap() {
		var myLatLng = { lat: -17.365730, lng: -66.234321 };
		map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
			zoom: 16
		});

		var marker = new google.maps.Marker({
			position: { lat: -17.365730, lng: -66.234321 },
			map: map,
			title: "Oficinas"
		});

	}



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeS0_l--kJyOVbbC3SLrLrP1SkEfCepbQ&callback=initMap" async defer></script>