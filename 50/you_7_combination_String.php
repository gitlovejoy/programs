<?php


$a=array(1=>0,0,0,0);

$n=count($a);
$k=1;


//combination($a,$k,$n);

$str='abcd';
combinationAlgo($str);

function combinationAlgo($str){
	
	$input_array=convertoArray($str);
	$result_array=array();

	foreach($input_array as $input){
		foreach($result_array as $result){
			$result_array []=$input.$result;
		}
		$result_array[]=$input;
	}

	print_r($result_array);
}
 
function convertoArray($str){
	return str_split($str);
}

function combination($a,$k,$n){

	if($k==$n){
		$a[$k]=0;
		myprint($a,$n);
		$a[$k]=1;
		myprint($a,$n);
		return;
	}

	$a[$k]=0;
	combination($a,$k+1,$n);
	$a[$k]=1;
	combination($a,$k+1,$n);
}

function myprint($a,$n){
	
	$b=array(1=>'a','b','c','d');
	
	$sum=0;

		echo "\n";
	for($i=1;$i<=$n;$i++){
		if($a[$i]==1){
			echo $b[$i].",";
			$sum++;
		}
		
		if($sum==0){
			echo "\n";
		}
	}

}

?>