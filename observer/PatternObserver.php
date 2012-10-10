<?php
include_once('AbstractObserver.php');
include_once('PatternSubject.php');

class PatternObserver extends AbstractObserver {

    public function __construct() { }

    public function update(AbstractSubject $subject) {
    	
      echo ' New favorite patterns: '.$subject->getFavorites()."<br><br>"; 
    }
}
?>