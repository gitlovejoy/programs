<?php
//pivot or mid wil lie in one of the halves

$array=array(100,120,4,7,20,40,50,55);

$x=100;

echo findInCircularArray($array,$x);

function findInCircularArray($array,$x){

	$start=0;

	$end=count($array)-1;

	while($start<=$end){
		
		$mid=ceil(($start+$end)/2);
		
		if($x==$array[$mid])
			return $mid;
		else if( $array[$mid]<=$array[$end]){
		
			if(($x>$array[$mid]) && ($x<=$array[$end])){
				$start=$mid+1;
			}else
				$end=$mid-1;
		}else if($array[$start]<=$array[$mid]){
			
			if(($x<$array[$mid]) && ($x>=$array[$start])) {
				$end=$mid-1;
			}else
				$start=$mid+1;
		}
	}
}
?>