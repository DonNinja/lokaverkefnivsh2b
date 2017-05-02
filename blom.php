<?php include './includes/random_image.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="verkefni 4">
	<meta name="author" content="Hakon klaus Haraldsson">
	<title>Verslun</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	
</head>
<body>
<style type="text/css">
    body{ background-image: url(<?= $selectedImage; ?>);
    background-repeat: no-repeat; }
</style>
	<?php require  './includes/nav.php'; ?>
<div class="kynna">
	<div class="blom">
<?php
echo "<br>";
$id = $_GET['id'];
if ($id == "ros.jpg") {
	echo "<br>";
    echo "<img src='img/blomin/ros.jpg'>";
    echo "<h1>þetta er rauð rós 10 stikki kosta 1599.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
} 
elseif ($id== "lilja.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/lilja.jpg'>";
    echo "<h1>þetta er lilja 3 stikki kosta 1099.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
} 
elseif ($id== "hadegi.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/hadegi.jpg'>";
    echo "<h1>þetta er hádegisblóm 5 stikki kosta 999.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
} 
elseif ($id== "gleim.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/hadegi.jpg'>";
    echo "<h1>þetta er gleym mér ei 7 stikki kosta 999.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
} 
elseif ($id== "daisy.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/daisy.jpg'>";
    echo "<h1>þetta er daisy 10 stikki kosta 499.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
} 
elseif ($id== "lavender.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/lavender.jpg'>";
    echo "<h1>þetta er lavander 10 stikki kosta 499.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
}
elseif ($id== "poppy.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/poppy.jpg'>";
    echo "<h1>þetta er poppy 4 stikki kosta 799.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
}
elseif ($id== "waterlily.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/waterlily.jpg'>";
    echo "<h1>þetta er vatnalilja 1 stikki kosta 999.Kr</h1>";
    echo "<button><a href='https://github.com/DonNinja/lokaverkefnivsh2b' target='_blank'>kaupa</a> </button>";
}
else {
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
    echo "how did you get here";
}

?>
</div>
</div>
<?php require './includes/footer.php'; ?>
</body>