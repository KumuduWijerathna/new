<?php
	function calculateArea($height, $width){
		$area = $height*$width;
		return $area;
	}

	$getArea = calculateArea(2,5);
	echo "The area is $getArea";
?>
