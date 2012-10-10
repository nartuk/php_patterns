<?php
class Client
{
	private $_abstractProductA;
	private $_abstractProductB;	  
	
	public function Client($factory)
	{
		echo " one instace of Client is generated.<br>";		
		$this->_abstractProductA = $factory->createProductA();
		$this->_abstractProductB = $factory->createProductB();
	}
	
	public function Run()
	{
		$this->_abstractProductB->Interact($this->_abstractProductA);
	}	
}
?>