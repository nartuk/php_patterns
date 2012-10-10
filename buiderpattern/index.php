<?php
include_once 'builder.php';
include_once 'director.php';
include_once 'concreteBuilder1.php';
include_once 'product.php';

$builder1 = new concreteBuilder1();

$director = new Director($builder1);

$product = $builder1->GetResult();
$product->show();
?>