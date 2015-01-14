<?php

//interleaving of strings means combination of 2 strings combined with order precedence maintained
//formula m+nCm
//AB CD

$string1=array('A','B');
$string2=array('C','D');
//$string1=str_split("ABE");
//$string2=str_split("CDE");
//$m=count($string1);
//$n=count($string2);
//$m=strlen($string1);
//$n=strlen($string2);
$m=0;
$n=0;
$result=array();
interleave($string1,$string2,$result,$m,$n,0);


function interleave($string1,$string2,$result,$m,$n,$i){

	if($m==count($string1) && $n==count($string2)){
		echo implode('',$result)."\n";
		//return;
	}else{

	//echo "*** i=".$i."\n";
		if($m<count($string1)){
			$result[$i]=$string1[$m];
			interleave($string1,$string2,$result,$m+1,$n,$i+1);
		}	
			
		if($n<count($string2)){
			$result[$i]=$string2[$n];
			interleave($string1,$string2,$result,$m,$n+1,$i+1);
		}	
	}
}


?>