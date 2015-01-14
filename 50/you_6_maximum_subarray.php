<?php

$array=array( 1,-3,2,-5,6,7,-1,-4,11,-23);

//echo maximum_sumsub_array($array);

//echo maximum_sumsub_array_kanane($array);


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

$array=array(3,-2,5,-1);
$n=count($array);
$output= maxSubArrayDivideConquer($array,$n);

echo "output=".$output;
function maxSubArrayDivideConquer($array,$n){

	if($n==1)
		return $array[0];
	else{
		$m=$n/2;
		echo "-----------m=".$m."\n";
		$leftMSS=maxSubArrayDivideConquer($array,$m);
		$rightMSS=maxSubArrayDivideConquer($array[$m],$n-$m);

echo "leftMSS=".$leftMSS."\n";
echo "rightMSS=".$rightMSS."\n";

		$leftsum=-12121;
		$rightsum=-12121;

		
		$sum=0;
		for($i=($m-1);$i>=0;$i--){
			$sum=$sum+$array[$i];
			$leftsum=max($sum,$leftsum);
		}
		echo "leftsum=".$leftsum."\n";

		
		$sum=0;

		for($i=$m;$i<$n;$i++){
			$sum=$sum+$array[$i];
			$rightsum=max($sum,$rightsum);
		}
		echo "rightsum=".$rightsum."\n";

		

		$answer=max($leftMSS,$rightMSS);

		return max($answer,$leftsum+$rightsum);
	}
	
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
