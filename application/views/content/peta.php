<h2>Peta Kabupaten Kuningan</h2>
<hr>
<center>
<img src="<?php echo base_url(); ?>assets/img/peta-kuningan.jpg" alt="logo kuningan" class="img-circle img-responsive center">
</center>
<br>
<hr>
<h2>On Google Maps <small>Membutuhkan Koneksi Internet</small></h2>

<br>
	<script>
		var myCenter=new google.maps.LatLng(-6.98334,108.483295);

		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:11,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>    
<center>
<div id="googleMap" style="width:600px;height:380px;"></div>
</center>
<br>

