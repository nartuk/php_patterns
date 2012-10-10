<?php
class productB2 extends AbstractProductB
{
	public function productB2(){
		echo "a new instance of product ".var_dump($this)." is generated .<br>";
	}
		
	public function Interact($a){
		
		var_dump($this);
		echo "interact with <br>";
		var_dump($a);
	}
}
?>