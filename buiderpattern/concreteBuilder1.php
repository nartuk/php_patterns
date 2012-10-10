<?php
include_once("product.php");

class concreteBuilder1 extends Builder{

	private $product;
	
	public function __construct(){
		$this->product = new Product();
	}
		
	public function BuildPartA(){
		$this->product->addPart("PartA");			
	}
	
	public function BuildPartB(){
		$this->product->addPart("PartB");
	}
	
	public function GetResult(){
		return $this->product;
	}
}
?>