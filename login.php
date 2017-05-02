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
</head>
	<?php require  './includes/nav.php'; ?>
<body>
<style type="text/css">
    body{ background-image: url(<?= $selectedImage; ?>);
    background-repeat: no-repeat; }
</style>
	<div class="kynna">
	<form method="post" action="signin.php">
		<p><h1>Skráðu þig inn hér</h1></p>
	    <p>
	        <input type="text" name="username" id="username" placeholder="Notendanafn" required>
	    </p>
	    <p>
	        <input type="password" name="password" id="password" placeholder="Lykilorð" required>
	    </p>
	    <p>
	        <input name="login" type="submit" value="Skrá inn">
	    </p>
	</form>
	</div>
	
	<?php require './includes/footer.php'; ?>
	
</body>
</html>