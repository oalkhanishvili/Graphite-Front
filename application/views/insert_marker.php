<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#map_canvas {height:600px;width:800px}
	</style>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	<script type="text/javascript">
		var map;
		var markersArray = [];

		function initMap()
		{
			var latlng = new google.maps.LatLng(41.699833, 44.803448);
			var myOptions = {
				zoom: 13,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

			// add a click event handler to the map object
			google.maps.event.addListener(map, "click", function(event)
			{
				// place a marker
				placeMarker(event.latLng);

				// display the lat/lng in your form's lat/lng fields
				document.getElementById("latFld").value = event.latLng.lat();
				document.getElementById("lngFld").value = event.latLng.lng();
			});
		}
		function placeMarker(location) {
			// first remove all markers if there are any
			deleteOverlays();
			var contentString = '<div id="content">'+
				'<form action="<?php echo site_url('insert/add'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">'+
				'<p><input type="text" name="user_id" placeholder="user id" value=""></p>'+
				'<p><select name="category_id">'+
				'<?php foreach ( $category as $item ): ?>'+
				'<option><?php echo $item['name']; ?></option>'+
				'<?php endforeach; ?>'+
				'</select></p>'+
				'<p><input type="text" name="title" placeholder="title"></p>'+
				'<p><textarea name="description"></textarea></p>'+
				'<p><input id="latFld" type="text" name="latitude" placeholder="long" value></p>'+
				'<p><input id="lngFld" type="text" name="longitude" placeholder="latitude" value></p>'+
				'<p><input type="file" name="userfile" ></p>'+
				'<button type="submit">შენახვა</button>'+
				'</form>'+
				'</div>';

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
			infowindow.open(map,marker);
			// add marker in markers array
			markersArray.push(marker);

			//map.setCenter(location);
		}

		// Deletes all markers in the array by removing references to them
		function deleteOverlays() {
			if (markersArray) {
				for (i in markersArray) {
					markersArray[i].setMap(null);
				}
				markersArray.length = 0;
			}
		}


	</script>
</head>

<body onload="initMap()">

<div id="map_canvas"></div>

</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php/* echo $map['js']; ?>
	<title>Document</title>
</head>
<body>
<?php  echo $map['html']; ?>
<script>
// assumes you're using jQuery
$(document).ready(function() {
$('.confirm-div').hide();
<?php if($this->session->flashdata('success')){ ?>
$('.confirm-div').css({
	'border':'1px solid black',
	'width':'300px',
	'color':'white',
	'background':'green',
	'padding':'10px',
}).html('<?php echo $this->session->flashdata('success'); ?>').show();
	<?php } ?>
});

</script>
<div class="confirm-div"></div>
<?php echo form_open_multipart('map/insert_mark');?>
	<p><select name="category_id">
	<?php foreach ( $category as $item ): ?>
		<option><?php echo $item['name']; ?></option>
	<?php endforeach; ?>
	</select></p>
	<p><input type="text" name="user_id" placeholder="user id" value="2"></p>
	<p><input type="text" name="title" placeholder="title"></p>
	<p><textarea name="description"></textarea></p>
	<p><input id="lat_id" type="text" name="latitude" placeholder="long" value></p>
	<p><input id="lng_id" type="text" name="longitude" placeholder="latitude" value></p>
	<p><input type="file" name="userfile" ></p>
	<button type="submit">შენახვა</button>

</form>
</body>
</html>
