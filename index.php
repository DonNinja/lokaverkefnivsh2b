<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="hopaverkefni">
	<title>blómabúðin okkar</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<nav>
		<ul>
					<a href=""><li class="v1">FORSIÐA</li></a>
					<a href=""><li class="v2">VERSLUN</li></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href=""><li class="v3">ACCOUNT INFORMATION</li></a>'}; else {echo '<a href=""><li class="v3">SIGN INN</li></a>'} ?>
					<a href=""><li class="v4">UPPLÝSINGAR</li></a>
				</ul>
	</nav>
	<div class=""></div>


	<?php require './includes/footer.php'; ?>
</body>
</html>

