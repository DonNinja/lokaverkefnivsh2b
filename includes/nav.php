<input type="checkbox" id="toggle">
    <label id="myP" for="toggle">&#9776; menu .</label>
	<nav>
		<ul>
					<a href="http://tsuts.tskoli.is/2t/0804993459/lokaverkefnivsh2b/"><li class="v1">FORSIÐA</li></a>
					<a href="http://tsuts.tskoli.is/2t/0804993459/lokaverkefnivsh2b/verslun.php"><li class="v2">VERSLUN</li></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href=""><li class="v3">ACCOUNT INFORMATION & KARFA</li></a>';} else {echo '<a href=""><li class="v3">SIGN INN</li></a>';} ?>
					<a href="http://tsuts.tskoli.is/2t/0804993459/lokaverkefnivsh2b/uppls.php"><li class="v4">UPPLÝSINGAR</li></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href=""><li class="v5">SKRÁ ÚT</li></a>';}?>
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