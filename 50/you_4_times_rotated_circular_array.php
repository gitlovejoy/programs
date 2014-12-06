<?php

$array=array(100,120,3,20,30,40,50,60);

$x=10;
echo times_rotated_circular_array($array,$x);

function times_rotated_circular_array($array,$x){

	//key property in circular sorted array is lowest number gives number of times rotated
	// pivot wud be less than next and previous
	// 4 cases to handle 
	// case 1: if a[start]< a [end] return start
	// case 2 : if mid < previous and mid < next return mid
	// case 3 : if mid < last,do not search in this delete segment move to left segement
	// case 4 : if mid > last,search in right segment


	$start=0;
	$end=count($array)-1;

	while($start<=$end){
		
		
		$mid=ceil(($start+$end)/2);
echo "mid=".$mid."\n";
		if($array[$start]<=$array[$end]){
			return $start;
		}
		$len=count($array);

		$next=($mid+1)%$len;
		$prev=($mid+$len-1)%$len;
	
		if($array[$mid]<=$array[$next] && $array[$mid]<=$array[$prev]){
			return $mid;
		}else if($array[$mid]<$array[$end])
			$end=$mid-1;
		else if($array[$mid]>$array[$start])
			$start=$mid+1;
		
	}

	echo "no of time=".$mid;
}
 