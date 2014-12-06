<?php

//find max and min

$array=array(20,50,5,7,25,30,2,9,12,23,45);

// divide and conqueur

//compare 2 elements
$i=0;
$len=count($array);
$j=$len-1	;
findMaxMin($array,$i,$j,0,0);

function findMaxMin($array,$i,$j,$min,$max){

	//$i=0;
	//$j=0;
	if($i==$j){
		$max=$array[$i];
		$min=$array[$i];
	}else if($i==$j)	{

		if($array[$i]>$array[$j]){
			$max=$array[$i];
			$min=$array[$j];

		//echo "i=$i,j=".$j.",max=".$max.",min=".$min."\n";
			//return array($max,$min);
		}else{
			$max=$array[$j];
			$min=$array[$i];

		//echo "i=$i,j=".$j.",max=".$max.",min=".$min."\n";
			
			//return array($max,$min);
		}
	}else{
		$mid=(int)(($i+$j)/2);
		
		//$max=$min=$mid;
		//$max1=$min1=$mid;

		//divide and conquer
		list($rmax,$rmin)=findMaxMin($array,$i,$mid,$min,$max);
		list($rmax1,$rmin1)=findMaxMin($array,$mid+1,$j,$min1,$max1);
/*
		if($rmax>$rmax1){
			//echo "Max=".$rmax."\t";
			$final_max=$rmax;
		}else{
			$final_max=$rmax1;
		}

		if($rmin<$rmin1){
			//echo "Min=".$rmin."\n";
			$final_min=$rmin;
		}else{
			$final_min=$rmin1;
		}
		
	echo "final_min=".$final_min."\n";
	
	echo "final_max=".$final_max."\n";

*/
		
		if($max<$max1)
			$max=$max1;
		
		if($min>$min1)
			$min=$min1;
		
	}
	echo "max=".$max."\t min=".$min."\n";

}

?>