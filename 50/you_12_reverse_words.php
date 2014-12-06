<?php

$str="my name is prem";

//from end to start
$array=explode(" ",$str);
$len=count($array)-1;
echo "len=".$len;
$str_output='';
for($i=$len;$i>=0;$i--){

	$str_output=$str_output." ".$array[$i];
}
echo rtrim($str_output);
?>