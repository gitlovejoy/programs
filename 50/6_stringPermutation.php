<?php



$str = "123";

permute($str,0,strlen($str)); // call the function.


// function to generate and print all N! permutations of $str. (N = strlen($str)).
function permute($str,$i,$n) {
   if ($i == $n)
       print "$str\n";
   else {
        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($str, $i+1, $n);
          echo "b4 2nd swap=".$str."\n";
		  swap($str,$i,$j); // backtrack.
		  
          echo "after 2nd swap=".$str."\n\n";
       }
   }
}

// function to swap the char at pos $i and $j of $str.
function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}



$input = "123";

function string_getpermutations($prefix, $characters, &$permutations)
{
    if (count($characters) == 1){
		$permutations[] = $prefix . array_pop($characters);
		echo "\npermutation=".implode(',',$permutations);
	}
	else
    {
        for ($i = 0; $i < count($characters); $i++)
        {
            $tmp = $characters;
            unset($tmp[$i]);
		
			string_getpermutations($prefix . $characters[$i], array_values($tmp), $permutations);
        }
    }
}


$characters = array();
for ($i = 0; $i < strlen($input); $i++)
    $characters[] = $input[$i];
$permutations = array();

//print_r($characters);
string_getpermutations("", $characters, $permutations);

//print_r($permutations);

$array=array(1,2,3);
//permute2($array);

function permute2($array){

	$j=0;
	
	$temp_array=$array;

	while($j<count($array)){
		
	
		for($i=$j;$i<count($temp_array);$i++){		
			$temp=$temp_array[$i];
			$temp_array[$i]=$temp_array[$j];
			$temp_array[$j]=$temp;

			echo implode(',',$temp_array)."\n";
		}

		$temp_array=$array;

		$j++;
	}
}
/*
	for($i=$j;$i<count($temp_array);$i++){
		
		$temp=$temp_array[$i];
		$temp_array[$i]=$temp_array[$j];
		$temp_array[$j]=$temp;

		echo implode(',',$temp_array)."\n";
	}

}*/




?>