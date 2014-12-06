<?php

class Node{
	public $data=NULL;
	public $next=NULL;

	public function __construct($item){
		$this->data=$item;
	}
}


class LinkedList{

	public $firstNode=NULL;

	public function __construct(){
	
	}

	public function insertFirst($item){
		

		$newNode=new Node($item); 

		if($this->firstNode!=NULL){
		
			$newNode->next=$this->firstNode;
		}
		$this->firstNode=$newNode;
		
	}

	public function insertLast($item){

		$newNode=new Node($item);

		$currentNode=$this->firstNode;
		if($currentNode==NULL){
			$this->firstNode=$newNode;
		}else{
			
			while($currentNode->next!=NULL){
				$currentNode=$currentNode->next;
			}
			$currentNode->next=$newNode;
		}
	}

	public function printList(){
		$currentNode=$this->firstNode;
		
		$append_data='';

		$result_array=array();
		while($currentNode!=NULL){

			$append_data=$append_data."->".$currentNode->data;
		//	array_push($result_array,$currentNode->data);

			$currentNode=$currentNode->next;

		}

		//print_r($result_array);

		echo "Result\n".$this->cleanup($append_data)."\n";
	}

	public function deleteFirst(){
		
		if($this->firstNode!=NULL) {
			$data=$this->firstNode->data;
				
			if ($this->firstNode->next==NULL){
				$this->firstNode=NULL;
			}else{
			
				$this->firstNode= $this->firstNode->next;
			}

			return $data;
		}
	}

	//Have previous and current
	public function deleteLast(){
		
		$current=$this->firstNode;

		if($current!==NULL ){
			if($current->next!=NULL){
				while($current->next!=NULL){
					
					$previous=$current;

					$current=$current->next;
				}
				$data=$current->data;
				$previous->next=NULL;
			}else{
				$data=$current->data;
				$this->firstNode=NULL;
			}
			
			return $data;
		}
	}



	public function reverseEasy(){
		
		$current=$this->firstNode;
		$newList=new LinkedList;
		
		while($current!==NULL){
			$data=$this->deleteFirst();
			$newList->insertFirst($data);
			$current=$current->next;
		}
		return $newList;
	}

	//CUT FIRST LINK i.e current->next by unlinking
	public function reverse(){
	
		if($this->firstNode!==NULL && $this->firstNode->next!==NULL){
	
			$current=$this->firstNode;

			$reversed_result=$temp=NULL;
			while($current!=NULL){
				
				//Unink next
				$temp=$current->next;
				
				$current->next=$reversed_result;
				$reversed_result=$current;

				$current=$temp;


				//Logic 2
				/*
				$temp=$current;
				$current=$current->next;//adavnce next

				$temp->next=$reversed_result;
				$revesed_result=$temp;
				*/

			}
			$this->firstNode=$reversed_result;
		}
	
	}

	public function cleanup($data){
		return preg_replace('/^[->]+/','',$data);
	}

}



$linkedList=new LinkedList();

$linkedList->insertFirst(3);
$linkedList->insertFirst(2);

$linkedList->insertLast(4);

/*
$deleteData=$linkedList->deleteFirst();

echo "After Delete First: $deleteData\n";
$linkedList->printList();

echo "After Delete Last: $deleteData\n";
$deleteData=$linkedList->deleteLast();
*/
$linkedList->printList();

//$newList=$linkedList->reverseEasy();

$linkedList->reverse();

$linkedList->printList();
