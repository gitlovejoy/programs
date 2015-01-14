<?php

//find min range from list of sorted arrays which has atleast one element present in each list
// output 10-13

$l1=array(1,5,10,20,30);
$l2=array(2,12,19,21);
$l3=array(8,13,24,35);


$input_list=array($l1,$l2,$l3);

$output=findMinRange($input_list);

echo "final output=".$output."\n";

function findMinRange($input_list){

	//1. Initialisation : get input lists,windodws size
	//2. Merge array and sort by ascending order
	//3. Loop for each window size of input)list eg: windows size=3 
	//4. storeValid windowRange
	//5. getSmalles windowRange from stored Valid windows range

	//1. Initialisation : get input lists,windodws size
	list($l1,$l2,$l3)=$input_list;

	$window_size=count($input_list);
	
	$store_valid_window=array();

	//2. Merge array and sort by ascending order
	$merged_array=array_merge($l1,$l2,$l3);
	sort($merged_array);

echo "merged_list=".implode(',',$merged_array)."\n";

	$merged_array_length=count($merged_array);

	$merge_index=$merged_array_length-($window_size-1);


	//3. Loop for each window size of input)list eg: windows size=3 
	for($start_index=0;$start_index<$merge_index;$start_index++){
	
		$end_index=$start_index+$window_size-1; //get end index function

		if(isValidWindowRange($input_list,$merged_array,$start_index,$end_index)){
			//4.store valid window range
			$store_valid_window[]=$merged_array[$start_index].",".$merged_array[$end_index];
		}
	}

echo "stored_list=".implode('|',$store_valid_window)."\n";
	
	list($min_value,$max_value)=getMinMax($store_valid_window[0]);
	$range_diff_init=getDifference($min_value,$max_value);
	$final_index=$store_valid_window[0];

	//5. getSmalles windowRange from stored Valid windows range
	for($stored_index=1;$stored_index<count($store_valid_window);$stored_index++){

		list($min_value,$max_value)=getMinMax($store_valid_window[$stored_index]);
		$range_diff=getDifference($min_value,$max_value);
		
		if($range_diff<$range_diff_init){
			
			$range_diff_init=$range_diff;
			$final_index=$stored_index;
		}
	}

	return $store_valid_window[$final_index];
}

function getDifference($start,$end){
	return $end-$start;
}

function getMinMax($string){
	return explode(',',$string);
}

function isValidWindowRange($input_list,$merged_array,$start_index,$end_index){
	
	list($l1,$l2,$l3)=$input_list;
	
	$l1_counter=$l2_counter=$l3_counter=0;

	for($i=$start_index;$i<=$end_index;$i++){
	
		if(elementExistsInList($merged_array[$i],$l1)){
			$l1_counter++;
		}
		
		if(elementExistsInList($merged_array[$i],$l2)){
			$l2_counter++;
		}

		if(elementExistsInList($merged_array[$i],$l3)){
			$l3_counter++;
		}
	}

	if($l1_counter==1 && $l2_counter==1 && $l3_counter==1){
		return true;
	}
	else{ 
		return false;
	}
}

function elementExistsInList($element,$array_list){
	
	return in_array($element,$array_list);
}