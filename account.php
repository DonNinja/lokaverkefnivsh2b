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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="hopaverkefni">
	<title>blómabúðin okkar</title>
	<link rel="icon" href="http://www.gardheimar.is/img/logo.png">
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<?php require  './includes/nav.php'; ?>

<div class="kynna" style="padding-top: 5em;">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim id enim non tempor. Donec in interdum quam. Mauris viverra nunc quis nisi venenatis condimentum. Mauris egestas volutpat urna, vitae laoreet nulla fringilla sit amet. Cras consectetur, enim in rhoncus dignissim, nulla nunc condimentum ipsum, ut vestibulum enim nulla a orci. Aliquam iaculis lorem sit amet volutpat malesuada. Ut efficitur velit a dictum aliquet. Mauris tempus laoreet ante, sit amet tincidunt nisl sagittis nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras non metus quis magna fringilla tempus. Aenean ornare at magna at tempor.
</div>

	<?php require './includes/footer.php'; ?>
</body>
</html>