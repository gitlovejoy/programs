<?php

//reverse order of words in a sentence
$str="I am Albert";
$str="Are you going?";
//$str="all is well in hyderabad";

$output=reverseWord($str);

echo "output-".$output;

function reverseWord($str){
	$array=explode(' ',$str);
	$output=array();
	for($i=count($array)-1;$i>=0;$i--){
		$output[]=$array[$i];
	}
	$output=ltrim(implode(' ',$output));
	return $output;
}

