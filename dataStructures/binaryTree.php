<?php

Class BinaryNode{
	
	public $nodeValue;
	public $left;
	public $right;

	public function __construct($item){
		$this->nodeValue=$item;
		$this->left=NULL;
		$this->right=NULL;
	}

	public function inorderTraverse(){
		
		//left -> root  -> right
		if($this->left!==NULL){
			$this->left->inorderTraverse();
		}
		echo $this->nodeValue."\n";

		if($this->right!==NULL){
			$this->right->inorderTraverse();
		}
	}
}

Class BinaryTree{

	private $_item;
	private $_root;
	
	public function __construct(){
		$this->_root=NULL;
	}

	public function insert($item){

		$binaryNode=new BinaryNode($item);

		if($this->_root==NULL){
			echo "Insert $item to root\n";
			$this->_root=$binaryNode;
		}else{
			
			if($item<$this->_root->nodeValue){
				echo "Insert $item to left\n";
				$this->_root->left= $binaryNode;

			}
			else if($item >$this->_root->nodeValue){
				echo "Insert $item to right\n";
				$this->_root->right= $binaryNode;
			}else{
				echo "SAME values.Ignore\n";
			}
		}
	}

	public function treeTraveseInorder(){
		$this->_root->inorderTraverse();
	}

}

$binaryTreeObj=new BinaryTree();

$binaryTreeObj->insert(10);
$binaryTreeObj->insert(5);
$binaryTreeObj->insert(15);
$binaryTreeObj->insert(3);
$binaryTreeObj->insert(1);

$binaryTreeObj->treeTraveseInorder();

?>