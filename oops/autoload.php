<?php

interface  ITest{
	public function setVariable($name, $var);
    public function getHtml($template);
}

function __autoload($name) {
	echo "name=".$name;
    var_dump($name);
}

class Foo implements ITest {
	public function setVariable($name, $var){
		echo "setVairbal";
	}

		public function getHtml($template){
		echo "setVairbal";
	}
}	
