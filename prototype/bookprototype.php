<?php
/*
*  abstract class BookPrototype
*/
abstract class BookPrototype {

    protected $title;
    protected $topic;
	
    // this magic method is invoked each time a clone is called on the object variable    
    abstract function __clone();

    function getTitle() {
    	return $this->title;
    }
    
    function setTitle($titleIn) {
    	$this->title = $titleIn;
    }

    function getTopic() {
    	return $this->topic;
    }
  }
?>