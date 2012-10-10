<?php
include_once "builder.php";

class Director {
	
	public function __construct($builder){
		
		$builder->BuildPartA();
		$builder->BuildPartB();
	}
}
?>