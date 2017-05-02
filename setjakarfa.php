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

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			echo '<script language="javascript">';
			echo 'alert("Þú þarft fyrst að skrá þig inn")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'verslun.php';\",1500);</script>";
		}

		else {
			echo '<script language="javascript">';
			echo 'alert("Þú þarft fyrst að skrá þig inn")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
		}
?>