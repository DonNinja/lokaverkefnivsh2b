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

			$username2 = $_SESSION['username'];
			$usernam = "SELECT ID FROM user WHERE nafn = '$username2'";
			$result1 = $conn->query($usernam);
			if ($result1->num_rows > 0) {
				while ($row = $result1->fetch_assoc()) {
					$usernam = $username2;
				}
			}
			else {
				$usernam = 0;
			}
			
			
?>