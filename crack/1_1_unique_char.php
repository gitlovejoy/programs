<?php

$string="";

var_dump(unqiue_char($string));

function unqiue_char($string){

	$array=str_split($string);

	$flag=true;
	if(count($array)<1){
		return $flag;
	}

	print_r($array);
	

	
	for($i=0;$i<(count($array)-1);$i++){
		if($flag){
			for($j=$i+1;$j< count($array);$j++){
				if($array[$i]==$array[$j]){
					$flag=false;
					break;
				}
			}
		}else{
			break;
		}
	}

	return $flag;
}
?>