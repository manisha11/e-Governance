<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>jQuery Autocomplete Plugin</title>
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
</head>
<body>
<h2 id="banner">Autocomplete using jQuery, Ajax, PHP</h1>
<div id="content">
	<form autocomplete="on">
		<p>
			Enter State Name <label>:</label>
			<input type="text" name="State" id="State" />
		</p>
		<input type="submit" value="Submit" />
	</form>
</div>
</body>
</html>
