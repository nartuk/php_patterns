<?php
include_once('bookprototype.php');

class SQLBookPrototype extends BookPrototype {

    function __construct() {
      $this->topic = 'SQL';
    }

    function __clone() {
    }

}//end class
?>