<?php

$array=array(10,45,3,67,4,25);


// j=0 10<45, nothing 10,45,3,67,4,25
// j=1 45>3, swap 10,3,45,67,4,25
// j=2 45<67, nothing 10,3,45,67,4,25
// j=3 67>4, swap 10,4,45,4,67,25
// j=4 67>25 swap 10,4,45,4,25,67


$sorted_array=bubbleSort($array);

$sorted_array=insertSort($array);

print_r($sorted_array);

function bubbleSort($array){
	//1. first pointer loops til end
	//2. start second pointer from 1st to last 4
	//3. compare second pointer current and next element
	//4. if current>next swap

	//The idea is to pass through the data from one end to the other, and swap two adjacent elements whenever the first is greater than the last. Thus, the smallest elements will "bubble" to the surfac
	
	for($i=0;$i<count($array);$i++){
		for($j=0;$j<count($array)-1;$j++){
			if($array[$j]>$array[$j+1]){
			
				$temp=$array[$j+1];
				$array[$j+1]=$array[$j];
				$array[$j]=$temp;

//				$array=swapArray($j,$j+1,$array);
			}
		}
	}

	return $array;
}

function swapArray($i,$j,$array){
	$temp=$array[$j];
	$array[$j]=$array[$i];
	$array[$i]=$temp;

	return $array;
}

$array=array('2','1','4','3');
function insertSort($array){
	//1. first loop through all elements in array
	//2. pick 1st element as sorted
	//3. start second loop for unsorted list array moving right to left  
	//4. check second loop first index > 1st loop element
			// yes  check which postion in sorted list i have to insert
	for(i=1


}


$text=array('prem');
$pattern=array('rem');
$brute_force($text, $pattern);

function brute_force($text, $pattern) 
{
  // let n be the size of the text and m the size of the
  // pattern

$n=count($text);
$m=count($pattern);
  for($i = 0; $i < $n; i++) {
    for(j = 0; j < m && i + j < n; j++) 
      if(text[i + j] != pattern[j]) break;
      // mismatch found, break the inner loop
    if(j == m) // match found
  }
}

?>

