<?php

//check Braces

$array=array('{','[','(',')',']','}');

//$array=array('(','{','[','}','}',')');

$array=array('(',')','[',']');

$result=checkBraces($array);

assert($result,"Brackets match");

function checkBraces($array){

//Loop 1..n in array
//check for open braces in array element
//	yes: push to stack
// check for element is close brackes
//	yes : pop from stack
//		: check if hashed value of open braces matches closed
//			if not failed
//			if yes continue checking

	$openBracesArray=array('{','[','(');

	$closeBracesArray=array('}',']','}');

	$bracketPairHash=array( '{' => '}' ,
							'[' => ']' ,
							'(' => ')' 
						);	


	$stack = new SplStack();
	$counter=0;

	$returnFlag=true;
	for($i=0;$i<count($array);$i++){
		if(isOpenBraces($array[$i],$openBracesArray)){
			$stack->push($array[$i]);
		}else if(isCloseBraces($array[$i],$closeBracesArray)){
			$poppedItem=$stack->pop();
			if($array[$i]==$bracketPairHash[$poppedItem])
				continue;
			else{
				$returnFlag=false;
				break;
			}
		}
	}

var_dump($returnFlag);
	return $returnFlag;
	
}

function isOpenBraces($value,$openBracesArray){
	return in_array($value,$openBracesArray);
}


function isCloseBraces($value,$closeBracesArray){
	return in_array($value,$closeBracesArray);
}


