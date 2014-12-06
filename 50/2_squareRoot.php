<?php


echo squareRoot(64);

function squareRoot($number){

	$start=0;
	$end=$number;

	if($number< 1)
		return $number;

	$precision=0.0001;
	while($end-$start>$precision	){
	
		$mid=($start+$end)/2;
		$midSquare=$mid*$mid;
echo "midsquare=".$midSquare."\t priceision=".$precision."\t start=".$start." \t" .$mid."\n";


		if($midSquare==$number){
			return $mid;
		}else if($midSquare<$number){
			$start=$mid;
			
		}else
			$end=$mid;



	}

}
?>