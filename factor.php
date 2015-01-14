<?php


$array=array(1,2,3,4,5,6,7);

//print_r($array);

unset($array[1]);
/*
while(count($array)>1){
	echo next($array)."\n";
}
*/
$count=0;
while($count<10){
   
	if(next($array)===false){
		echo reset($array)."\n";
	}else{
		prev($array)."\n";
		echo next($array)."\n";
	}
	
	$count++;
	
}





//echo fact(3);

function fact($n){
	if($n<=1)
		return 1;
	else
		return $n*fact($n-1);

}



//3! 3*2!
//2! 2*1!

