<?php
/*
*  abstract class BookPrototype
*/
abstract class BookPrototype {
    //make properties private not protected we have set and get method and any one can use it
    private $title;
    private $topic;
	
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
    
    function setTopic($topicIn) {
    	$this->topic = $topicIn;
    }
    
  }
?>
