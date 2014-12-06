<?php


$a_array=array(2,14,18,19);
$b_array=array(1,13,15,22,24);

merge_array($a_array,$b_array);

/*
$l1=count($a1);
$l2=count($a2);

$i = $l1 - 1;
$j = $l2 - 1;
$result_pos = $l1 + $l2 - 1;
while ($i >= 0 || $j >= 0) {
    if ($a1[$i] >= $a2[$j]) {
        $a2[$result_pos--] = $a1[$i--];
    } else {
        $a2[$result_pos--] = $a2[$j--];
    }

	
	
}
*/

function merge_array($a_array,$b_array){
	
	$result=array();
	
	$length_a=count($a_array);
	$length_b=count($b_array);
	
	$i=0;$j=0;$k=0;

	while($i<$length_a && $j<$length_b){
	
		if($a_array[$i]<$b_array[$j]){
			$result[$k]=$a_array[$i];
			$i++;
		}else{
			$result[$k]=$b_array[$j];
			$j++;
		}
		$k++;
	}

	while($i<$length_a){
		$result[$k]=$a_array[$i];
		$i++;
		$k++;
	}

	while($j<$length_b){
		$result[$k]=$b_array[$j];
		$j++;
		$k++;
	}

	print_r($result);
}









?>