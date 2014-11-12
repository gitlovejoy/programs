<?php

class Class1{

	public $var ="variable value 12";

	function getVal(){
		echo "\n".$this->var;
	}

	function setVal($value){
		$this->var=$value;
	}
}

class Class2{

	public $var ="variable value 22";

	function getVarVal(){
		echo "\n".$this->var;
	}
}





$obj1=new Class1();

$obj1_copy=new Class1();
//$obj1_copy=$obj1;

$obj1_copy->var="variable value 12 to 11";

echo "\nobj1=".$obj1->var;

echo "\n".$obj1_copy->var;
