<footer style="background-color: rgb(221,121,9); color: white; width: 100%; text-align: center;">
    <p><h5>tæknemi® and all related logos and other elements are trademarks of tæknemi hf.
	©
    <?php
	$startYear = 2016;
	$thisYear = date('Y');
		if ($startYear == $thisYear) {
	 	 echo $startYear;
		} else {
		 echo "{$startYear} &ndash; {$thisYear}";
		}
?> tæknemi hf. All rights reserved. <a href=""> hafið samband</a></h5></p>
</footer>