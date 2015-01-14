<?php

//kth smallest element

//kth smallesles

//algor : sortinging and kth element


//

$array=array(12,10,40,15,19,20,25);
//$array=array(65,70,75,80,85,60,55,50,45);
//$array=array(4,2,1,7,5,3,8,10,9,6);
$k=2;
//12,40,12,10,15,19,20,25


kthsmallest($array,$k);

function kthsmallest($array,$k){
	
	$i=0;
	$j=count($array)-1;
	$k=$k-1;


	do{

		list($array,$index)=partitionPivot($array,$i,$j);
echo "index=".$index."\n";
echo implode(',',$array)."\n";

		if($index==$k){
			$kth=$k+1;
			echo $kth."th smallest=".$array[$index];
			return;
		}else if($k<$index){
			$j=$index;

		}else{
			$i=$index+1;

		}
	}while(true);
}

function partitionPivot($array,$start,$end){
	/*
4,656,1,12,45

$i=0,$pivot=45,4<45 swap with iteselef,pindex=1
$i=1,$pindex=1,656<!45 no swap
$i=2,$pindex=1,$pivoit=45 1<45 swap(pindex,i) 4,1,656,12,45,$pindex=2
$i=3,$pindex=2,12<45,swap(pindex,i) 4,1,12,656,45 $pindex=3
*/

	$pivot=$array[$start];

//echo "start=".$start."\t end=".$end."\t pivot=".$pivot."\n";

	$partion_index=$start;

	for($i=$start;$i<$end;$i++){
		if($array[$i]<$pivot){
			$array=swap($array,$i,$partion_index);
			$partion_index+=1;
		}
	}
	//swap($array,$partion_index,$end);
	return array($array,$partion_index);
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