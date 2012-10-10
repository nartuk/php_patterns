<?php
include_once('PatternSubject.php');
include_once('PatternObserver.php');

$subj  = new PatternSubject();

$observer = new PatternObserver();

$subj->attach($observer);

$subj->updateFavorites('abstract factory, decorator, visitor');
$subj->updateFavorites('abstract factory, observer, decorator');
$subj->detach($observer);

$subj->updateFavorites('abstract factory, observer, paisley');

?>