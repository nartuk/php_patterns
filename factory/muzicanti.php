<?php
include "abilitati.php";

class Baterist implements Abilitati {
	
	public function numeInstrument()
	{ 
		echo "Nume instrument : baterie"."<br>"; 
	}
	
	public function cantaunCantec($nume_cantec)
	{ 
		echo "Canta cantecul la baterie : ".$nume_cantec."<br>";
	}

}//end class

class Chitarist implements Abilitati
	{
	
	public function numeInstrument()
	{ 
		echo "Nume instrument : chitara"."<br>"; 
	}
	
	public function cantaunCantec($nume_cantec)
	{ 
		echo "Canta cantecul la baterie : ".$nume_cantec."<br>";
	}

}//end class
?>