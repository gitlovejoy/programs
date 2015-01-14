<?php

$array=array(1,13,14,12, 1,2,2,8, 7,6,8,4, 2,1,3,4);

countSorting($array);

function countSorting($array){

	$sorted_array=array();

	//Store to counter array
	$counter_array=storeToCounterArray($array);

	print_r($counter_array);


	foreach($counter_array as $key=>$value){
		if($value>0){
			for($i=1;$i<=$value;$i++){
				$sorted_array[]=$key;
			}
		}
	}
	
	print_r($sorted_array);
}

function storeToCounterArray($array){
	$asize=count($array);
	$counter_array=array_fill(0,$asize,0);

	foreach($array as $key=>$value){
		$counter_array[$value]=$counter_array[$value]+1;
	}
	return $counter_array;
}

?>
