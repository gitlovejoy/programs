<?php

$arr=array( '2','4','1','3');


$data=simpleSort($arr);

print_r($data);

function simpleSort($data){
	for($i=0;$i<count($data);$i++){
		for($j=$i+1;$j<count($data);$j++){
			echo "i=$i;j=$j\t";
			
			if($data[$i]>$data[$j]){
				$temp=$data[$j];
				$data[$j]=$data[$i];
				$data[$i]=$temp;
			}
			echo implode(',',($data))."\n";
		}
	}
	return $data;
}