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
	<!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />-->	
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
	<b><p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
	<p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p></b>
	
	<table>
		<tr>
			<th>Nafn</th>
			<th>Magn</th>
			<th>Single verð</th>
			<th>Verð</th>
		</tr>
		<tr>
			<td>Rósir</td>
			<td>Magn</td>
			<td>1400 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Lilja</td>
			<td>Magn</td>
			<td>300 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Hádegisblóm</td>
			<td>Magn</td>
			<td>500 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Gleym-mér-ei</td>
			<td>Magn</td>
			<td>800 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Daisy</td>
			<td>Magn</td>
			<td>500 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Lavender</td>
			<td>Magn</td>
			<td>900 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Poppy</td>
			<td>Magn</td>
			<td>1000 kr.</td>
			<td>Verð</td>
		</tr>
		<tr>
			<td>Vatnslilja</td>
			<td>Magn</td>
			<td>1100 kr.</td>
			<td>Verð</td>
		</tr>
	</table>

	</div>
	<?php require './includes/footer.php'; ?>
</body>
</html>