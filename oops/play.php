<?php

//Key point oops

//Visibilty
// - private methods cant be overriden,only public and protected methods can be overridden
// -You can't decrease the visibility of class members, only increase them. !!!! does not make sense

//Abstract class
//- you can have abstract class but not have any abstract methods

//Interface
// - can have only constants but no properties or constructors ?
//	 yes.to have initialisation

//parent keyword

class MyParent{
	
	public function parentMethod(){
		echo "Call parent method\n";
	}

	public function parentNonStaticMethod(){
		echo "Call parent Non Static method\n";
	}

	static public function parentStaticMethod(){
		echo "Call parent  Static method\n";
	}

	


}

class MyChild extends MyParent{
	
	public function __construct(){
		$this->parentMethod();
	}

	
	public function childNonStaticMethod(){
		parent::parentNonStaticMethod();
	}

	
	public function childStaticMethod(){
		parent::parentStaticMethod();
	}
}


$child=new MyChild();
$child->childNonStaticMethod();

$child->childStaticMethod();

exit;

class A {

	public function foo(){
		echo "foo A";
	}

	protected function protectedFoo(){
		echo "protected Foo A";
	}

	private function foo1(){
		echo "public function foo1";
	}
}

class B extends A {

	public function foo(){
		echo "foo B";
		$self->protectedFoo();
	}

	public function protectedFoo(){
		echo "public Foo B";
	}


	private function foo1(){
		echo "public function foo1";
	}
}

abstract class AbstractClass{
	
	public function testfn(){
	}

	//abstract function testmethod();
}

$Bobj=new B();

$Bobj->foo();