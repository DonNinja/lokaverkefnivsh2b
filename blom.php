<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="verkefni 4">
	<meta name="author" content="Hakon klaus Haraldsson">
	<title>Hakon klaus .H. verkefni 4</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<?php
$id = $_GET['id'];
if ($id== 1) {
    echo "this is a viking raider a fears beast";
} 
elseif ($id== 2) {
    echo "this is a sumrai honorable fighter";
} else {
    echo "how did you get here";
}

?>

</body>