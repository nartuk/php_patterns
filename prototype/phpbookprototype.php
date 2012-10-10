<?php
include_once('bookprototype.php');

class PHPBookPrototype extends BookPrototype {

    function __construct() {
      $this->topic = 'PHP';
    }

    function __clone() {
    }
    
}//end class
?>