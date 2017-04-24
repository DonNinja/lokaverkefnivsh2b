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

		$nofn = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$heimili = $_REQUEST['heimilisfang'];
		$query = "SELECT 'username' FROM user WHERE nafn = '$nofn' AND password = '$pass'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		if (mysqli_num_rows($result) == 1)
		{
			echo '<script language="javascript">';
			echo 'alert("Þetta nafn er þegar tekið")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'sign_up.php';\",1500);</script>";
		}

		else {
			$sql = "INSERT INTO user (nafn, password, heimilisfang) VALUES ('$nofn', '$pass', '$heimili');";
			$conn -> query($sql);
			echo '<script language="javascript">';
			echo 'alert("Notandi hefur verið skráður")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
		}
		?>