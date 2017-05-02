<?php include './includes/startsession.php'; ?>
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
	<form method="post" action="signup.php">
		<p><h1>Skráðu inn nýjan notenda hér</h1></p>
	    <p>
	        <input type="text" name="username" id="username" placeholder="Notendanafn" required>
	    </p>
	    <p>
	        <input type="password" name="password" id="password" placeholder="Lykilorð" required>
	    </p>
	    <p>
	        <input type="text" name="heimilisfang" id="heimilisfang" placeholder="Heimilisfang kemur hér">
	    </p>
	    <p>
	        <input name="login" type="submit" value="Skrá notenda">
	    </p>
	</form>
	</div>
	<!--<div class="fotur">-->
	<?php require './includes/footer.php'; ?>
	<!--</div>-->
</body>
</html>