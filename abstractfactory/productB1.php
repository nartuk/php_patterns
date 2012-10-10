<?php
class productB1 extends AbstractProductB
{
	public function productB1(){
		echo "a new instance of product B1 is generated .<br>";
	}
		
	public function Interact($a){
		
		var_dump($this);
		echo "interact with <br>";
		var_dump($a);
	}
}
?>