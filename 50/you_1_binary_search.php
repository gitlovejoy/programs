<?php

//Binary Search Iterative
//Binary Search Recursive

//Preq : Sorted Array

$array=array(1,2,3,4,7,15,20,93,120);
$x=120;
$len=count($array);

$result=binary_search_index($array,$len,$x);
	echo "index=".$result."\n";

	/*
if(!$result){
	echo "index=".$result;
}*/

function binary_search_index($array,$len,$x){

	$start=0;
	$end=$len-1;

	while($start<=$end){

		$mid=ceil(($start+$end)/2);

		if($x==$array[$mid])
			return $mid;
		else if($x<$array[$mid])
			$end=$mid-1;
		else
			$start=$mid+1;

	}
	return false;
}


$start=0;
$end=$len-1;
$x=3;



echo "recurisive=".binary_search_index_recursive($array,$start,$end,$x)."\n";

function binary_search_index_recursive($array,$start,$end,$x){
	//echo "start=".$start."\t end=".$end."\t mid=".$mid."\n";
	
	if($start>$end){
		return -1;
	}

	$mid=ceil(($start+$end)/2);

	if($x==$array[$mid]){
		//echo "mid=".$mid."\n";
		return $mid;
		
	}
	else if($x<$array[$mid])
		return binary_search_index_recursive($array,$start,$mid-1,$x);
	else 
		return binary_search_index_recursive($array,$mid+1,$end,$x);

}

//echo "test=".binary_search2($x, $array, $start, $end);
/**
 * Recursive binary search
 *
 * @param int $x The target integer to search
 * @param array $list The sorted array
 * @param array $left First index of the array to be searched
 * @param array $right Last index of the array to be searched
 * @return int The index of the search key if found, otherwise -1 
 */
function binary_search2($x, $list, $left, $right) {
    if ($left > $right) {
        return -1;
    }	
 
$mid=(int)(($left+$right)/2);
    
    if ($list[$mid] == $x) {
        return $mid;
    } elseif ($list[$mid] > $x) {
        return binary_search2($x, $list, $left, $mid - 1);
    } elseif ($list[$mid] < $x) {
        return binary_search2($x, $list, $mid + 1, $right);
    }
}


?>