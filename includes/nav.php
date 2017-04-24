<input type="checkbox" id="toggle">
    <label id="myP" for="toggle">&#9776; menu .</label>
	<nav>
		<ul>
					<a href="index.php"><li class="v1">FORSIÐA</li></a>
					<a href="verslun.php"><li class="v2">VERSLUN</li></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href="account.php"><li class="v3">ACCOUNT INFORMATION & KARFA</li></a>';} else {echo '<a href="login.php"><li class="v3">SIGN INN</li></a>';} ?>
					<a href="uppls.php"><li class="v4">UPPLÝSINGAR</li></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href="signout.php"><li class="v5">SKRÁ ÚT</li></a>';} else {echo '<a href="sing_up.php"><li class="v5">NÝ SKRÁNING</li></a>';}?>
				</ul>
	</nav>
	<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myP").className = "test";
    } else {
        document.getElementById("myP").className = "";
    }
}
</script>