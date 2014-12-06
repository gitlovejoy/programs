<?php

//count duplicates in sorted arrau


$array=array(1,3,10,10,10,10,20);

$x=10;
count_duplicates($array,$x);

function count_duplicates($array,$x){
	
	$start=0;
	$end=count($array)-1;


	$first=searchData($start,$end,$array,$x,true);
	
	if($first>=0){
		$last=searchData($start,$end,$array,$x,false);
	}

	echo $last-$first+1;
	

}
function searchData($start,$end,$array,$x,$firstFlag){
	$result=-1;

	while($start<=$end){
		$mid=ceil(($start+$end)/2);
		
		if($x==$array[$mid]){
			$result=$mid;
			
			if($firstFlag)
				$end=$mid-1;
			else
				$start=$mid+1;

		}else if($x<$array[$mid]){
			$end=$mid-1;
		}else
			$start=$mid+1;

	}

echo "result=".$result."\n";
	return $result;
}
?>