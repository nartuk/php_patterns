<?php
include_once "abstractfactory.php";
include_once "abstractproductA.php";
include_once "abstractproductB.php";
include_once "productA2.php";
include_once "productB2.php";

class concreteFactory2 extends AbstractFactory 
{	
	public function concreteFactory2()
	{
		echo "Factory2 start creating products... A2 and B2 <br>";
	}
		
	public function createProductA()
	{
			return new productA2();
	}	
	
	public function createProductB()
	{		
		return new productB2();
	}	
}