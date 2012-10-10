<?php
include "client.php";
include "abstractfactory.php";
include "concreteFactory1.php";
include "concreteFactory2.php";

$factory1 = new concreteFactory1();

$client = new Client($factory1); 
$client->Run();

$factory2 = new concreteFactory2();

$client = new Client($factory2); 
$client->Run();
?>