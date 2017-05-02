<?php include './includes/random_image.php' ?>
<?php include './includes/startsession.php'; ?>
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
    echo "<h1>þetta er rauð rós 1 stikki kostar 1400.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"1\">";
        echo "<button>kaupa</button>";
    echo "</form>";
} 
elseif ($id== "lilja.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/lilja.jpg'>";
    echo "<h1>þetta er lilja 1 stikki kostar 300.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"2\">";
        echo "<button>kaupa</button>";
    echo "</form>";
} 
elseif ($id== "hadegi.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/hadegi.jpg'>";
    echo "<h1>þetta er hádegisblóm 1 stikki kostar 500.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"3\">";
        echo "<button>kaupa</button>";
    echo "</form>";
} 
elseif ($id== "gleim.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/hadegi.jpg'>";
    echo "<h1>þetta er gleym mér ei 1 stikki kostar 800.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"4\">";
        echo "<button>kaupa</button>";
    echo "</form>";
} 
elseif ($id== "daisy.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/daisy.jpg'>";
    echo "<h1>þetta er daisy 1 stikki kostar 500.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"5\">";
        echo "<button>kaupa</button>";
    echo "</form>";
} 
elseif ($id== "lavender.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/lavender.jpg'>";
    echo "<h1>þetta er lavander 1 stikki kostar 900.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"6\">";
        echo "<button>kaupa</button>";
    echo "</form>";
}
elseif ($id== "poppy.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/poppy.jpg'>";
    echo "<h1>þetta er poppy 1 stikki kostar 1000.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"7\">";
        echo "<button>kaupa</button>";
    echo "</form>";;
}
elseif ($id== "waterlily.jpg") {
    echo "<br>";
    echo "<img src='img/blomin/waterlily.jpg'>";
    echo "<h1>þetta er vatnalilja 1 stikki kostar 1100.Kr</h1>";
    echo "<form method=\"post\" action=\"setjakarfa.php\" type=\"submit\" value=\"8\">";
        echo "<button>kaupa</button>";
    echo "</form>";
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