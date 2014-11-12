<?php

Class Stack{
	
	private $stackArray;
	private $limit;

	public function __construct($limit=10){
		$this->stackArray=array();
		$this->limit=$limit;
	}

	public function push($item){
		if(count($this->stackArray)<$this->limit)
			return array_push($this->stackArray,$item);//or array_unshift to prepend
	}

	public function pop(){
		if(!$this->isEmpty()){
			return array_pop($this->stackArray);// array_shift
		}
	}

	public function top(){
		return end($this->stackArray);
	}

	private function isEmpty(){
		if(count($this->stackArray)<1)
			return true;
		else
			return false;
	}
}

$stackObj=new Stack(5);

$stackObj->push(10);
$stackObj->push(20);
$stackObj->push(30);
$stackObj->push(40);

echo "\n pop=".$stackObj->pop();

echo "\n top=".$stackObj->top();


?>