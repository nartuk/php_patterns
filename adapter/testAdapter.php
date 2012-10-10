<?php
include_once('SimpleBook.php');
include_once('BookAdapter.php');

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides","Design Patterns");
$bookAdapter = new BookAdapter($book);
  
echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();
?>