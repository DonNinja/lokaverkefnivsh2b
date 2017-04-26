<?php include './includes/startsession.php'; ?>
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
		<?php
	// Ath. hér eru harðkóðar lausnir notaðar til einföldunar sem sýnidæmi.

	setcookie ('komin',"<br><h1>Velkomin/n til baka á blóma vefverslun Yngva og Klaus</h1><br>", time()+(60*60*24*7));
	$var1 ="";	// breyta hefur default gildi
	

	if(isset($_COOKIE['komin'])){	// Notandi gæti hafið beytt eða eytt cookie gildum, eða útrunnið
		$var1 = $_COOKIE['komin']; 	// sækjum gildið úr cookie
	}
	else {
		$var1 = "<br><h1>Velkomin/n á blóma vefverslun Yngva og Klaus</h1><br>";
	}
	echo $var1; // ef það er unset þá kemur ekki melding, þar sem viðupphafstilltum $var1
	?>
		<h3>Á þessari síðu getur þú aflað þér upplýsingar um blómin okkar og keypt blóm og fræ þeirra</h3><br>
		<img src="img/indexmid.jpg">
	</div>

	<?php require './includes/footer.php'; ?>
</body>
</html>