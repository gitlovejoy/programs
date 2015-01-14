<?php



$str = "abc";

//permute($str,0,strlen($str)); // call the function.

$used=array(false,false,false);
$output=array();
$str_len=strlen($str);
$position=0;

//permuteNoSwap($str,$used,$output,$str_len,$position);

function permuteNoSwap($str,$used,$output,$str_len,$position){
	//have one fixed and permutate rest of charcter til legnth of array equal to postions
	//base condition to stop recursion
	//Loop over each element with one element fixed
	//if element is already used skip
	//else add to element to output,mark it used

	$input_array=convertToArray($str);
	
	if($str_len==$position){
		echo implode(',',$output)."\n";
			
		return;//
	}else{
	
		for($i=0;$i<$str_len;$i++){
			
			//if used mark it as used
			if($used[$i])
				continue;
			else{

				$output[]=$input_array[$i];
				$used[$i]=true;

				permuteNoSwap($str,$used,$output,$str_len,$position+1);
			
				//delete one char from last
				//unset($output[count($output)-1]);
				$output=array_slice($output,0,count($output)-1);
				$used[$i]=false;
			}

		}
	}
	

}

function convertToArray($str){
	return str_split($str);
}



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
			$prefix=$prefix . $characters[$i];
		

			string_getpermutations($prefix, array_values($tmp), $permutations);
        }
    }
}


$characters = array();
for ($i = 0; $i < strlen($input); $i++)
    $characters[] = $input[$i];
$permutations = array();

print_r($characters);
string_getpermutations("", $characters, $permutations);

print_r($permutations);

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