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
	include_once 'signin.php';
?>
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
	<div class="kynna">
	<br><h1>Þetta er Upplýsinga síðan þín, <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo $_SESSION['username'];} else {echo "[Skráðu þig inn fyrst]";} ?>. Þú getur líka kíkt á körfuna þína og keypt blómin sem þú villt.</h1><br>
	</div>

	<?php require './includes/footer.php'; ?>
</body>
</html>