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
	<form method="post" action="signup.php">
		<p><h1>Skráðu inn nýjan notenda hér</h1></p>
	    <p>
	        <input type="text" name="username" id="username" placeholder="Notendanafn" required>
	    </p>
	    <p>
	        <input type="password" name="password" id="password" placeholder="Lykilorð" required>
	    </p>
	    <p>
	        <input type="text" name="heimilisfang" id="heimilisfang" placeholder="Heimilisfang kemur hér" required>
	    </p>
	    <p>
	        <input name="login" type="submit" value="Skrá notenda">
	    </p>
	</form>
	<?php require './includes/footer.php'; ?>
</body>
</html>