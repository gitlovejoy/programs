<?php

$string="121";

//rotatedPalindrome($string);

$string="121";
var_dump(isPalindrome($string));

function rotatedPalindrome($string){
	$array=str_split($string);


	$left=$array[0];

	
	$right=$array[1]+$array[count($array)-1];

	$rightleft=$right+$left;
	if(isPalindrome($right+$left)){
		return true;
	}
}

function isPalindrome($string){

	$array=str_split($string);

	$flag=true;
	$mid=ceil(count($array)/2);

echo "mid=".$mid."\n";
	for($i=0;$i<=$mid;$i++){

		$lastindex=count($array)-($i+1);
		
		echo "i=".$i."\t lastindex=".$lastindex."\n";
		if($array[$i]!=$array[$lastindex] ){
			$flag=false;
			break;
		}
	}
	
	return $flag;
}

?>