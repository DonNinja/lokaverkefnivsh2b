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
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />
</head>
<body>
	<?php require  './includes/nav.php'; ?>
<div class="kynna">
	<br><h1>hér er vefverslunina</h1><br>
	<br><h2>síðastskoðað</h2><br>
	<br><h1>ýttu á blómið sem þú hefur áhuga á</h1>
</div>
<div class="verslun">
	<a href="blom.php?id=ros.jpg"><img src="img/blomin/ros.jpg"></a>
	<a href="blom.php?id=lilja.jpg"><img src="img/blomin/lilja.jpg"></a>
	<a href="blom.php?id=hadegi.jpg"><img src="img/blomin/hadegi.jpg"></a>
	<a href="blom.php?id=gleim.jpg"><img src="img/blomin/gleim.jpg"></a>

</div>


		<div class="kynna">
			<h1>Hér getur þú skoðað og keypt blóm, smelltu á myndirnar fyrir fleiri upplýsingar um blómin.</h1>
		</div>
		<div class="skodad">
			
		</div>
	<?php require './includes/footer.php'; ?>
</body>
</html>