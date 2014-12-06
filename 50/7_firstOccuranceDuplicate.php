<?php

$array=array(1,2,2,3,3,3,3);
firstIndexofNumber($array,2);

function firstIndexofNumber($array,$number){

	//boundary condition checking


	//Have 2 index start,end 
	$start=0;
	$end=count($array);

	$index='';

	while($start<$end){

		$mid=ceil(( $start+$end)/2);
	if($array[$mid]==$number){
			$index=$mid;
			break;
		}
		else if($number>$array[$mid]){
			$start=$mid;
		}else{
			$end=$mid;
		}
	}

	while($array[$index]==$number){
echo "array[$index]=".$array[$index]."\t number=".$number."\t index=".$index."\n";

		$index--;
	}
	$index++;
	echo "Final index=".$index;	
}