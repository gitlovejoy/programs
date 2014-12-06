<?php

//kth smallest element

//kth smallesles

//algor : sortinging and kth element


//

$array=array(12,10,40,15,19,20,25);
$array=array(65,70,75,80,85,60,55,50,45);
$k=2;
//12,40,12,10,15,19,20,25


kthsmallest($array,$k);

function kthsmallest($array,$k){
	
	$i=0;
	$j=count($array)-1;
	$k=$k-1;


	while(true){
echo "i=".$i."j=".$j."\n";

		list($array,$index)=partition($array,$i,$j);
echo "index=".$index."\n";
echo implode(',',$array)."\n";

		if($index==$k){
			echo "kth smallest=".$array[$index];
			return;
		}else if($k<$index){
			$j=$index;

		}else{
			$i=$index+1;

		}
	}
}


function partition($array,$i,$j){
	$pivot=$array[$i];
echo implode(',',$array)."\n";
	
	$first=$array[$i];
	$last=$array[$j];
	$i++;
	
	while($i<$j){
		
		while($array[$i]<=$pivot && $i<$j){
			$i++;
		}		
		while($array[$j]>=$pivot&& $i<$j){
			$j--;
		}
		if($array[$i]>$array[$j]){
	
			$array=swap($array,$i,$j);
		}

		
	}

//echo "i=".$i."\n";
	//array_splice( $array, $i,0,$pivot); 
	$array[0]=$array[$i-1];

	$array[$i-1]=$pivot;
	

	echo "$i,$j---".implode(',',$array)."\n";
	echo implode(',',$array)."\n\n";

	return array($array,$i-1);
}


function swap($array,$i,$j){
	$temp=$array[$j];
	$array[$j]=$array[$i];
	$array[$i]=$temp;

	return $array;
}