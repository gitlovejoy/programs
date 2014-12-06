<?php

$string1="lisstens";
$string2="silent";


var_dump(anagrams($string1,$string2));

function anagrams($string1,$string2){
	$array1=str_split($string1);
	
	$array2=str_split($string2);


	$array_hash1=array();
	$array_hash2=array();

	foreach($array1 as $value){
		
		if(array_key_exists($value,$array_hash1)){

			$array_hash1[$value]=$array_hash1[$value]+1;
		}else{
			$array_hash1[$value]=1;
		}
	}

	foreach($array2 as $value){
		
		if(array_key_exists($value,$array_hash2)){

			$array_hash2[$value]=$array_hash2[$value]+1;
		}else{
			$array_hash2[$value]=1;
		}
	}

	foreach($array_hash1 as $key=>$value){
		$flag=true;
echo "key=".$key."\t value=".$value."\n";
		if($array_hash2[$key]!=$value){
			$flag=false;
			break;
		}
	}
	
	return $flag;

	/*
	if(sort($array1)==sort($array2))
		return true;
	else 
		return false;
		*/
}

?>