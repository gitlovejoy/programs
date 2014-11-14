<?php

Class LLNode{
	
	public $nodeValue=NULL;
	public $next=NULL;

	public function __construct($item){
		$this->nodeValue=$item;
	}
}

Class LinkedList{

	public $current=NULL;
	public $topNode=NULL;
	public $counter=0;

	public function insertFirst($item){
		$newNode=new LLNode($item);
			
		if($this->topNode===NULL){
			$this->topNode=$newNode;
		}else{
			$newNode->next=$this->topNode;
			$this->topNode=$newNode;
		}


	}

	public function insertLast($item){
		$newNode=new LLNode($item);
			
		$current=$this->topNode;
		
		if($current===NULL){
			$this->topNode=&$newNode;

		}else{
			while($current->next!==NULL){
				$current=$current->next;
			}
			
			$current->next=$newNode;
		}
	}

	//Need Current Node for travesing
	public function insertPositionAfter($item,$position){
		
		$newNode=new LLNode($item);

		$current=$this->topNode;
		while($current->next!==NULL){
			$current=$current->next;
			
			$this->counter++;

			if($this->counter==$position){
				break;
			}
		}

		if($current!==NULL){
			if($current->next!==NULL){
				$newNode->next = $current->next;
			}
			$current->next=$newNode;
		}
	}

	public function deleteFirst(){
		
		if($this->topNode!==NULL){
			if($this->topNode->next==NULL){
				$this->topNode=NULL;
			}else{
				$this->topNode=$this->topNode->next;
			}//10->20
		}
	}


	public function printList(){
		$LLData=array();
		$current=$this->topNode;

		while($current!==NULL){
			array_push($LLData,$current->nodeValue);
			$current=$current->next;
		}

		print_r($LLData);
	}

}

$LLObj=new LinkedList();

$LLObj->insertFirst(20);
$LLObj->insertFirst(10);

$LLObj->insertLast(30);

$LLObj->insertPositionAfter(15,3);

$LLObj->deleteFirst();

$LLObj->printList();
