<?php

$array=array(2,10,40,15,19,20,25);
$array=array(8,9,3,18,2,7,14,1,5);
$x=6;

partition($array,$x);

function partition($array,$x){

	// have 2 pointers to traverse one @ start ,one @ end
	// traverse start pointer and move inward til pointer greater than number x
	// similary travese end pointer and move inward til pointer is greater than number x
	// swap if start index greater than end index
	// do this process til start and end cross over
	$i=0;
	$j=count($array)-1;

	while($i<$j){

	echo "\n	i=".$i."\t j=".$j."\t x=".$x."\t a[i]=".$array[$i]."\n";

		while($array[$i]<$x && $i<$j){
			echo "incrment i\n";
			$i++;
		}
		while($x<$array[$j] && $i<$j){
			echo "decrment j\n";
			$j--;
		}

		if($array[$i]>$array[$j]){
			$array=swap($array,$i,$j);
		}
	echo implode(',',$array)."\n";

	}



	array_splice( $array, $i,0,$x); //insert number X at ith position

	echo "\n".implode(',',$array);

}

function swap($array,$i,$j){
	$temp=$array[$j];
	$array[$j]=$array[$i];
	$array[$i]=$temp;

	return $array;
}