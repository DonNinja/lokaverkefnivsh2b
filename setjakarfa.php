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
			$username2 = $_SESSION['username'];
			$password2 = $_SESSION['password'];
			$blom2 = $_POST['blom'];
			$usernam = "SELECT ID FROM user WHERE nafn = '$username2'";
			$result1 = $conn->query($usernam);
			if ($result1->num_rows > 0) {
				while ($row = $result1->fetch_assoc()) {
					$usernam2 = mysqli_fetch_row($result1);
				}
			}
			$blomin = "SELECT ID FROM blom WHERE ID = '$blom2'";
			$result2 = $conn->query($blomin);
			if ($result2->num_rows > 0) {
				while ($row = $result2->fetch_assoc()) {
					$blomin = $blom2;
				}
			}

			//$query = "SELECT user_id, blom_id FROM panta INNER JOIN user ON user.id = panta.user_id INNER JOIN blom ON blom.ID = panta.blom_id AND user.nafn = $username2 WHERE user.ID = $usernam AND blom.ID = $blomin";
			//$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
			$query2 = "INSERT INTO panta(user_id, blom_id) VALUES ($usernam2, $blom2)";
			$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
			echo '<script language="javascript">';
			echo 'alert("Þetta hefur verið sett í körfuna")';
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