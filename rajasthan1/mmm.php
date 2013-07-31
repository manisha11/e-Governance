<!DOCTYPE html>
<html>
<head>
    <title>Rajasthan Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        margin: 1;
        padding: 0;
        height: 100%;
      }
    </style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBABGScJQIfCPdEHscp_YPmr79uAtdYU-k&sensor=false&region=IN"></script>
    <script>
var map;

function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(27, 74),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}
function get_marker(lat,lon) {
var myLatlng = new google.maps.LatLng(lat,lon);
 var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'RAJASTHAN MAP'
  });
var infowindow = new google.maps.InfoWindow({
      content: 'My lat is ' + lat + 'My lon is ' + lon
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

function codeAddress(address, add) {
  var geocoder;
   geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title: address
      });
      var infowindow = new google.maps.InfoWindow({
      content: add
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
<?php 

 	$host = mysqli_connect("localhost","****","****","rajasthan");
	if(mysqli_connect_errno($host)) {
		echo "Not Connected to database";
	}
	
	$item = $_POST["add1"];
	$result = mysqli_query($host,"SELECT address,kiosk_name,ph_no,mail_id FROM data WHERE address='$item'");
	
	while($row = mysqli_fetch_array($result))

	{
?>

	<script>
	var add,i;
        add = "<?php echo $item.",CSC Name:".$row["kiosk_name"].",Contact no.:".$row["ph_no"].",E-mail id:".$row["mail_id"];?>";
        codeAddress('<?php echo $item; ?>', add)
	
	//	codeAddress(add);
	</script>
	<?php
	   }
	?>

		<div id = "map-canvas"></div>

  

	

  </body>
</html>









    
