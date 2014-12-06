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
		//1. Create Node Instance
		//2. Check if LL is empty by checking topNode points to null
			//if true:  add new Node to top node
			//else	 : new nodes->next=topNode ,topNode=newNnode    1->2
		$newNode=new LLNode($item);

			
		if($this->topNode===NULL){
			$this->topNode=$newNode;
		}else{
			$newNode->next=$this->topNode;
			$this->topNode=$newNode;
		}


	}

	public function insertLast($item){
		//1. Create Node Instance
		//2. Check if LL is empty by checking topNode points to null
			//if true:  add new Node to top node
			//else : loop til end of node,by checking traversing pointers next point to null 
			//			at final step point current->next=new node
		
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

	public function reverse(){
		//Logic 1
		// Reverse is ( 1 -> RemainList) becomes
		// Revesee ( RemainList -> 1)

		//check if reverse LL is empty and LL->next==NULL
		//yes	: retain value
		//no : take current=first element out
		//	 : loop til current is not NULL
			 :			



		//Logic 2: DeleteFirst,InsertFirst by looping to end of loop

		if($this->topNode==NULL && $this->topNode->next==NULL){
			return $this->topNode;
		}

		$nextPointer=$this->topNode;


		if($this->topNode!==NULL){
			if($htis->topNode->next!=NULL){
			
				$current=$this->topNode;

				while($current!==NULL) {//loop til end of nodes
					
					$temp=$current->next;//20,30

					$current->next=$reversed;// NULL,10

					$reversed=$current;//10,20,

					$current=$temp;//20,30

				}//10->20->30  20-10-30 20-30-10
			}
		}
	}

}

$LLObj=new LinkedList();

$LLObj->insertFirst(20);
$LLObj->insertFirst(10);

$LLObj->insertLast(30);

$LLObj->insertPositionAfter(15,3);

$LLObj->deleteFirst();

$LLObj->printList();

//reverse
//deleteFirst
//insertFirst
