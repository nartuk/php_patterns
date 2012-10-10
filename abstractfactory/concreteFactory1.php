<?php
include_once "abstractfactory.php";
include_once "abstractproductA.php";
include_once "abstractproductB.php";
include_once "productA1.php";
include_once "productB1.php";

class concreteFactory1 extends AbstractFactory 
{
	public function concreteFactory1()
	{
		echo "Factory1 start creating products... A1 and B1.<br>";
	}	
	
	public function createProductA()
	{
		
		return new productA1();
	}	
	
	public function createProductB()
	{		
		return new productB1();
	}

}