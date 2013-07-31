<!DOCTYPE html>

<html>
  <head>

	
    <title>Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<script src="css/bootstrap-responsive.css"></script>
        <!-- files or auto complete-->
          

<script src="js/bootstrap.js"></script>
<script>
    function submitForm(action)
    {
        document.getElementById('form').action = action;
        document.getElementById('form').submit();
    }
</script>
    <meta charset="utf-8">
    
    
    <style>
      html, body, #map-canvas {
        margin: 1;
        padding: 0;
        height: 90%;
      }
      .center
       {
        margin-left:auto;
         /*margin-top:15cm; */
       margin-right:auto;
          text-align:center;
       width:70%;
      background-color:;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBABGScJQIfCPdEHscp_YPmr79uAtdYU-k&sensor=false&region=IN">
    </script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 7,
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
      title: 'CSC Map'
  });
var infowindow = new google.maps.InfoWindow({
      content: 'My lat is ' + lat + 'My lon is ' + lon
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

function codeAddress(address,add) {
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


/*google.maps.event.addListener(marker, 'click', function() {
        alert('hello world');
        jQuery("#form").show();
	console.log('#form');
    	
});*/


    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

  <body>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap-modal.js"></script>
   
  <script type="text/javascript" src="assets/js/jquery-1.4.2.js"></script>
          <script type='text/javascript' src="assets/js/jquery.autocomplete.js"></script>
	  <link rel="stylesheet" type="text/css" href="assets/css/jquery.autocomplete.css" />
	
          
 	<script type="text/javascript">
        $().ready(function() {
	$("#State").autocomplete("autoCompleteMain.php", {
		width: 250,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>
  

  <div class="modal hide fade" id="form" tabindex="-1" role="dialog" aria-hiddden="true">
  <div class="modal-header">
 
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button> 
 <h3 id="mymodalLabel">FEEDBACK FORM</h3> 
 <h4> Your suggestions are welcomed </h4>
 </div>
 <div class="modal-body">
 

<!--<div id="form" class="modal hide fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">FEEDBACK FORM</h3>-->

<form action="demo.php" method="post" autocomplete="on">

STATE:<br /> <input type="text" name="State" id="State" /> <br />
<br />

DISTRICT: <br/> <input type="text" name="District" /> <br />
<br />

VILLAGE: <br/> <input type="text" name="Village" /> <br />
<br />

SERVICES:
<div>
			<textarea id="Services" name="Services" class="element textarea medium"></textarea> 
		</div> 

<input type="submit" value ="submit"> <br />
<br />


<!--<button type="submit" onClick="submitForm('map2.php')" class="btn btn-large btn-success"> Map View </button>
 <button type="button" onClick="submitForm('imagetry.php')" class="btn btn-large btn-success"> List View </button></a>-->

</form>
</div>
</div>
   <?php
	$host = mysqli_connect("localhost", "root", "1112", "rajasthan");
	if(mysqli_connect_errno($host)) {
	    echo "Not connected to database";
	} 

	
	$item=$_REQUEST["District"];
	
	
?>
	    
	<script>
	
	var add,i;
        add = '<a data-toggle="modal" href="#form" role="button" class="btn" data-toggle="modal">FEEDBACK FORM</a>';
        codeAddress('<?php echo $item; ?>',add)
	
	//	codeAddress(add);
	</script>
    

	<div id="map-canvas"></div> 



  </body>
</html>
