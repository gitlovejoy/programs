<?php

echo fact(3);

function fact($n){
	if($n<=1)
		return 1;
	else
		return $n*fact($n-1);

}

//3! 3*2!
//2! 2*1!

