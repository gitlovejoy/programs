<?php

$arr=array(10,20,30,24,26,40,-10,60);

//$arr=array(-10,-30,10,0,20,40);

$result=sumpairs($arr);

print_r($result);
function sumpairs($arr){

	$sum=50;
	$final_pair=array();
	$index="";

	for($i=0;$i<count($arr);$i++){
		$new_value=0;//i+x=sum-
		

		if($i==$index){
			continue;
		}
		$new_value=$sum-$arr[$i];

		if(in_array($new_value,$arr)){
			$index=array_search($new_value,$arr);
			$pair=$arr[$i].",".$new_value;
			array_push($final_pair,$pair);
		}
		
	}

	return $final_pair;
}
?>