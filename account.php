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
<body>
<style type="text/css">
    body{ background-image: url(<?= $selectedImage; ?>);
    background-repeat: no-repeat; }
</style>
	<?php require  './includes/nav.php'; ?>
	<div class="kynna">
	<br><h1>
		<?php 
			if (isset($_SESSION['loggedin'])) {
				if ($_SESSION['username'] == 'yngvi' || $_SESSION['username'] == 'hakon') {
					echo "Þú ert admin, þannig ég þarf ekki að segja þér neitt.";
				}
				else {
					echo "Þetta er upplýsinga síðan þín, " . $_SESSION['username'] . " hér getur þú kíkt á upplýsingar um þig og séð körfuna þína.";
				}
			}
			else {
				echo "Þú hefur ekki skráð þig inn, þú þarft að gera það fyrst áður en þú kemur á þessa síðu";
			}
		?>
	</h1><br>
	</div>

	<?php require './includes/footer.php'; ?>
</body>
</html>