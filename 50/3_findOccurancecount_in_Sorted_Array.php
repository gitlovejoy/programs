<?php

$array=array('1','2','2','2','2','3','3','33','33','36','38');

//$array=array('2','33','33');

$numberToCount=1;

//findOccuranceCount($array,$numberToCount);

$counter=findOccuranceCountDivideandConquer($array,$numberToCount);



echo "final counter=".$counter;

function findOccuranceCount($array,$numberToCount){
	$count=0;
	for($i=0;$i<count($array),$array[$i]<=$numberToCount ;$i++){
		
		if($array[$i]==$numberToCount){
			$count++;
		}
	}
	echo "i=".$i ."count=".$count."\n";
}


function findOccuranceCountDivideandConquer($array,$number){

	$start=0;
	$end=count($array)-1;

echo "start=".$start."\t end=".$end."\n";
	//boundary conditions

	if($start==$end){
		return 0;
	}
	if($array[$start]>$number ){
		return 0;
	}
	if ($array[$end]<$number){
		return 0;
	}
	if($array[$start]==$number && $array[$end]==$number){
		return $end-$start+1;
	}

	$counter=0;

	$index=0;

	while($start<$end){
echo "start=".$start."\t end=".$end."\n";
		
		$mid=ceil(($start+$end)/2);
		if($array[$mid]==$number){
			$index=$mid;
			$counter++;
			break;
		}else if($array[$mid]<$number){
			$start=$mid;
		}else{
			$end=$mid;
		}
	}

	echo "index=".$index."\n";

	$midLess=$index;
	$midMore=$index;

	$counter=getPreviousCount($array,$number,$midLess,$counter);

	$counter=getNextCount($array,$number,$midMore,$counter);

	echo "count=".$counter."\n";

	return $counter;
}
function getPreviousCount($array,$number,$midLess,$counter){
	echo "getPreviousCount=".$counter."\t".$midLess;
	
	if($midLess==0){
		return $counter;
	}
	$midLess--;
	while($array[$midLess]==$number){
		$counter++;
		$midLess--;
	}
	return $counter;
}

function getNextCount($array,$number,$midMore,$counter){
	$midMore++;
	
	if($midMore==count($array)){
		return $counter;
	}
	while($array[$midMore]==$number){
		$counter++;
		$midMore++;
	}
	return $counter;
}



?>