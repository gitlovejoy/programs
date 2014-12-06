<?php

$array=array(10,20,40,60,80,90,99);



sumpairsOptimal($array);

function sumpairsOptimal($array){

	$i=0;
	$j=count($array)-1;
	$final_pair_array=array();
	while($i<$j){
		$sum=100;
		$addedSum=$array[$i]+$array[$j];
	echo "$i,$j addedSum=".$addedSum."\n";
		if($addedSum==$sum){
			$pair=$array[$i].",".$array[$j];

			array_push($final_pair_array,$pair);
			$i++;
			$j--;
		}else if($addedSum < $sum){
			$i++;
		}else if($addedSum>$sum){
			$j--;
		}
	}

	print_r($final_pair_array);

}

//$result2=assoc_array_fn($array);

function assoc_array_fn($array){
	
	$final_array=array();
/*
	for($i=0;$i<count($array);$i++){
		$final_array[$array[$i]];
	}
*/
	foreach($array as $key=>$value){
		$final_array[$value]=$key;
	}

	print_r($final_array);
}


//$result=sumpairs($array);

print_r($result);

function sumpairs($array){

	$sum=100;

	$final_pair_array=array();

	for($i=0;$i<count($array);$i++){
	
		$new_value=0;

		$new_value=$sum-$array[$i];

		if(in_array($new_value,$array)){
			$pair=$array[$i].",".$new_value;
			array_push($final_pair_array,$pair);
		}
	
	}
	
	return $final_pair_array;
}