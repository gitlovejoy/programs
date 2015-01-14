<?php

class Database{


	private static $instance=null;//. Static because It is attached to a class, not an object

	private function __construct(){
		
	}

	public function getInstance(){
		if(self::$instance==NULL){ //or  if (!isset(self::$instance))
			self::$instance=new Static();
		}
		return $instance;
	}

}

class Database2{


	private static $instance=null;//. Static because It is attached to a class, not an object

	private function __construct(){
		
	}

	public function getInstance(){
		if($instance==NULL){ //or  if (!isset(self::$instance))
			self::$instance=new Static();
		}
	}

}