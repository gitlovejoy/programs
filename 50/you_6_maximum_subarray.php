<?php

$array=array( 1,-3,2,-5,6,7,-1,-4,11,-23);

echo maximum_sumsub_array($array);

echo maximum_sumsub_array_kanane($array);


function maximum_sumsub_array($array){

	//loop for each index
	// loop for each sub array size
	// inside inner loop check if sum of subarray size is greater than answer

	$answer=0;
	for($index=0;$index<count($array);$index++){
	
		$sum=0;

		for($subarray_size=1;$subarray_size<=count($array);$subarray_size++){
			
			if($index+$subarray_size>count($array))
				break;

			$sum=$sum+$array[$index+$subarray_size-1];

			if($sum>$answer)
				$answer=$sum;
		}
	}
	return $answer;
}

function maximum_sumsub_array_kanane($array){
	$sum=0;
	$answer=0;
	for($i=0;$i<count($array);$i++){
		
		if($array[$i]+$sum>0){
			$sum+=$array[$i];
		}else
			$sum=0;

		if($sum>$answer)
			$answer=$sum;

	}

	return $answer;
}
