<?php
class MaClasse {
	
	private static $instance;
	
	private function __construct() {
		
    	echo "The class is instanced !";
    }
    
	public static function getInstance() {
    	
		if ( ! isset(self::$instance) ) {
      		self::$instance = new MaClasse();
      	}
      	else {
      		echo "Error ! The class allready instanced !";
      	}
    
      	return self::$instance;
    }
    
	public function mangerCarotte() {
    
		echo "Gnip gnip !";
    }
    
}

$a1 = MaClasse::getInstance();
$a2 = MaClasse::getInstance();
?>