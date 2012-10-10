<?php
include "orchestra.php";
include "muzicanti.php";

$orchestra = new Orchestra();

$orchestra->apelMuzician("Baterist");
$orchestra->apelMuzician("Chitarist");

$nb = $orchestra->numarMuzicieni();

for($i = 1; $i <= $nb; $i++)
	{	
	echo $orchestra->muzicieni[$i]->numeInstrument();
	echo $orchestra->muzicieni[$i]->cantaunCantec('Test');
	echo "<br><br>";
	}
?>