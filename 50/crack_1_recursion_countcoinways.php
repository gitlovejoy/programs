<?php

$n=100;
$denom=25;

echo makeChange($n,$denom);


function makeChange($n,$denom){

	$next_denom=0;

	$ways=0;
	switch ($denom){
	
	case 25:
		$next_denom=10;
		break;
	case 10:
		$next_denom=5;
		break;
	case 5:
		$next_denom=1;
		break;
	default:
		return 1;
	}

	for($i=0;$i*$denom<=$n;$i++){
		$ways+=makeChange($n-$i*$denom,$next_denom);
	}	

	return $ways;
}