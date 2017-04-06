<?php
		$servername = "tsuts.tskoli.is";
		$username = "2605993489";
		$password = "mypassword";
		$dbname = "2605993489_lokaverkefnivsh2b";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Það tókst ekki að connect-a við database-ið: " . $conn->connect_error);
		}
		session_start();
		?> <!--Copy & Paste this on top of every single site-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="hopaverkefni">
	<title>Bl&oacute;mab&uacute;&eth;in okkar</title>
	<link rel="icon" href="http://www.gardheimar.is/img/logo.png">
	<link rel="stylesheet" type="text/css" href="layout.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />
</head>
<body>

	<?php require  './includes/nav.php'; ?>
	<div class="kynna">
		<br><h1>Velkomin/n á blóma vefverslun Yngva og Klaus</h1><br>
		<h3>Á þessari síðu getur þú aflað þér upplýsingar um blómin okkar og keypt blóm og fræ þeirra</h3><br>
		<img src="img/indexmid.jpg">
	</div>

	<?php require './includes/footer.php'; ?>
</body>
</html>

