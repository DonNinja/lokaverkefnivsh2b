<?php
 $images = [
	['file' => 'background'],
	['file' => 'background2'],
	['file' => 'background3']
 ];

 $i = rand(0, count($images)-1);
 $selectedImage = "img/{$images[$i]['file']}.jpg";
 while (in_array(($i2 = rand(0, count($images)-1)), array($i)));

 /*$numImages = count($images); // $numImages is 8
 $max = $numImages – 1; // $max is 7
 $i = rand(0, $max); // $i = rand(0, 7)*/ 