<?php

$str = 'one,two,one,five,seven,bag,tea';

$result=removeDuplicateFromString($str);

echo $result;

function removeDuplicateFromString($str){

	return implode(",",(array_unique(explode(",",$str))));
}

?>
