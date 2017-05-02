<?php include './includes/startsession.php'; ?>
<?php include './includes/random_image.php' ?>
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
<style type="text/css">
    body{ background-image: url(<?= $selectedImage; ?>);
    background-repeat: no-repeat; }
</style>
<?php require  './includes/nav.php'; ?>

<div class="kynna">
	<h1>Upplýsingar um okkar síðu</h1>
	<h4>Þessi vefsíða er hópaverkefni hjá okkur Hákoni og Yngva.</h4>
	<h3>Þessi síða er vefverslun þar sem þú getur keypt blóm og fræ</h3>
	<h3>Þú getur fylgst með öllum breytingum á þessari síðu há</h3>
	<button>
	<a href="https://github.com/DonNinja/lokaverkefnivsh2b" target="_blank">github.com</a>
	</button>
	<h3>eða með því að koma á þessa síðu reglulega</h3>
</div>
<div class="location">
	<h1>Staðsettning fyrirtækis</h1>
	<h3>Okkur getur þú fundið á egilsgötu 10 í upplýsingatækniskólan</h3>
</div>
<div class="location">
	<img src="img/tskoli.JPG">
</div>
<div class="UmOkkur">
	<h1>Yngvi Leó Þráinsson</h1><br>
	<h2>Ég er fæddur 26. Maí 1999 á Húsavík, en ólst aðallega upp í Reykjavík</h2>
	<h2>Ég er á tölvubraut í upplýsingatækniskólanum og áhugamálin mín eru tölvuleikir og tæknifræðsla</h2>
</div>
<div class="UmOkkur">
	<h1>Hákon Klaus Haraldsson</h1><br>
	<h2>Ég er fæddur 1999 í apríl og kem upprunalega úr Grindavík.</h2>
	<h2>Ég er á tölvu braut í upplýsingatækniskólanum og áhugamálin mín eru bardagaíþróttir og tækni</h2>
</div>

<?php require './includes/footer.php'; ?>
</body>
</html>