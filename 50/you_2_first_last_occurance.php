<?php


$array=array(1,2,3,10,10,10,10,93,120);

$x=10;

echo binary_search_first($array,$x);


echo binary_search_last($array,$x);

function binary_search_first($array,$x){

	//Have 2 indices start,end
	//Loop until first,last cross
	//Pick mid point
	// check if mid index is searched number,if true store  mid index,decrease end range 
	// check if number is less than mid point,on true decrease search range from mid point
	// else increase start range

	$start=0;
	$end=count($array)-1;
	$result=-1;
	
	while($start<=$end){

		$mid=ceil(($start+$end)/2);

	echo "start=".$start."\t end=".$end."\t mid=".$mid."\n";
		if($x==$array[$mid]){
			$result=$mid;
			$end=$mid-1;
		}else if($x<$array[$mid]){
			$end=$mid-1;
		}else
			$start=$mid+1;
	}

	return $result;

}


function binary_search_last($array,$x){

	//Have 2 indices start,end
	//Loop until first,last cross
	//Pick mid point
	// check if mid index is searched number,if true store  mid index,decrease end range 
	// check if number is less than mid point,on true decrease search range from mid point
	// else increase start range

	$start=0;
	$end=count($array)-1;
	$result=-1;
	
	while($start<=$end){

		$mid=ceil(($start+$end)/2);

	echo "start=".$start."\t end=".$end."\t mid=".$mid."\n";
		if($x==$array[$mid]){
			$result=$mid;
			$start=$mid+1;
		}else if($x<$array[$mid]){
			$end=$mid-1;
		}else
			$start=$mid+1;
	}

	return $result;

}