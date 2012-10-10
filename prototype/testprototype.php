<?php
include_once('phpbookprototype.php');
include_once('sqlbookprototype.php');

define('BR', '<'.'BR'.'>');

echo 'BEGIN TESTING PROTOTYPE PATTERN'.BR;
echo BR;

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();

$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');
echo 'Book 1 topic: '.$book1->getTopic().BR;
echo 'Book 1 title: '.$book1->getTitle().BR;

echo BR;

echo 'sqlProto topic: '.$sqlProto->getTopic().BR;
echo 'sqlProto title: '.$sqlProto->getTitle().BR;

echo BR;

$book2 = $phpProto;
$book2->setTitle('OReilly Learning PHP 5');
echo 'Book 2 topic: '.$book2->getTopic().BR;
echo 'Book 2 title: '.$book2->getTitle().BR;

echo BR;

$book3 = $sqlProto;
$book3->setTitle('OReilly Learning SQL');
echo 'Book 3 topic: '.$book3->getTopic().BR;
echo 'Book 3 title: '.$book3->getTitle().BR;

echo BR.BR;
echo 'END TESTING PROTOTYPE PATTERN'.BR;
?>