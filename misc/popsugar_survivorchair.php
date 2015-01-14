<?php

function getSurvivor($chairs_array){
	
	$survivor_count=chairsleft($chairs_array);
	
	$remove_chair_position=1;
	
	$skip_count=1;
	
	//loop until only 1 survivor
	while($survivor_count>1){
	
		$remove_chair_position=getRemoveChairIndex($chairs_array,$remove_chair_position,$skip_count,$survivor_count);
		
		$chairs_array=removeChair($chairs_array,$remove_chair_position);

		$skip_count++;		

		$survivor_count=chairsleft($chairs_array);
	
	}

	$survivor=getSurvivorPosition($chairs_array);

	return $survivor;

}

//Get Survivor position
function getSurvivorPosition($chairs_array){
	foreach($chairs_array as $key=>$value){
		if(isChairPresent($chairs_array,$key))
			return $key;
	}
}

//check if chair is present or not
function isChairPresent($chairs_array,$index){

	if(isset($chairs_array[$index]) && $chairs_array[$index]===1)
		return true;
	else
		return false;
}

//get chair remove Index position
function getRemoveChairIndex($chairs_array,$remove_chair_position,$skip_count,$survivor_count){
	
	if($skip_count>1){
		$count=0;
		while($count<$skip_count){
			echo "count=".$count."\t skipcount=".$skip_count."\t remove_chair_position=".$remove_chair_position."\n";
			$remove_chair_position++;
			
			$remove_chair_position=$remove_chair_position % (count($chairs_array)+1);

			if($skip_count>$survivor_count){
				$remove_chair_position=$remove_chair_position+$skip_count%$survivor_count;
			}
			$count++;

			/*
			if(isChairPresent($chairs_array,$remove_chair_position))
				$count++;
				*/
		}
		echo "---\n";
	}

	return $remove_chair_position;
}

//remove chair
function removeChair($chairs_array,$remove_chair_position){
	//$chairs_array[$remove_chair_position]=0;
	unset($chairs_array[$remove_chair_position]);
	return $chairs_array;
}

//count chairs left
function chairsleft($chairs_array){
	$count=0;
	foreach($chairs_array as $key=>$value){
		if(isChairPresent($chairs_array,$key))
			$count++;
	}
	return $count;
}



//initialise  all chairs 1 to 100 sequentially into an array
$chairs_array = array_fill(1,10,1);
$result = getSurvivor($chairs_array); 

echo $result." is the survivor chair number sitting in";

?>