<?php
class Product {
	
	public $lista = array();
	
	public function addPart($_part){
		
		array_push($this->lista, $_part);
	}
	
	public function show(){

		echo "Show product : ".var_dump($this)."<br>";
		
		foreach ($this->lista as $key=>$value){
			echo $value."<br>";	
		}
	}
}