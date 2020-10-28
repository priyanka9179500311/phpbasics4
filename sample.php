<?php
	//class Declaration
	class simple{
		//1. property
		
		//2. constructor
		public function __construct(){
			echo 'Hello from constructor';
		}
		//3. method
		public function getSimple(){
			echo 'Hello from method';
		}
	}
	//create an object of the class
	$obj = new simple();
	
	//call the method
	$obj->getSimple();
?>