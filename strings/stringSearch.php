<?php

$text=str_split('prem');
$pattern=str_split('rem');

brute_force($text, $pattern);

function brute_force($text, $pattern) 
{


	$n=count($text);
	$m=count($pattern);

echo "n=".$n."\t m=".$m."\n";
  for($i = 0; $i < $n; $i++) {

    for($j = 0; $j < $m ,$i + $j < $n; $j++){
      echo "i=$i;j=$j\t text=".$text[$i + $j]."\t pattern=".$pattern[$j]."\n";
	  if($text[$i + $j] != $pattern[$j]) {
		  break;
	  }
	}
	
      // mismatch found, break the inner loop
    if($j == $m){
		echo "return true";
	}// match found
  }
}

?>