<?php


Class QueueArray{

	private $queueArray;

	public function __construct(){
		$this->queueArray=array();
	}

	public function enQueue($item){
		return array_push($this->queueArray,$item);
	}

	public function deQueue(){
		if(!$this->isEmpty()) {
			return array_shift($this->queueArray);
		}else{
			return "Queue Empty";
		}
	}

	public function isEmpty(){
		if(count($this->queueArray)<1)
			return true;
		else
			return false;
	}
}


$qObj=new QueueArray();

$qObj->enQueue(10);
$qObj->enQueue(20);
$qObj->enQueue(30);


echo $qObj->deQueue();
echo $qObj->deQueue();
echo $qObj->deQueue();
echo $qObj->deQueue();

?>