<?php
require 'autoload.php';
use BookCollection\BookCollection;

$bookCollection = new BookCollection ();
$bookCollection->addBook ("Clean code ");
$bookCollection->addBook ("Design patterns ");
$bookCollection->addBook ("Sorting ");

$collectionIterator=$bookCollection->createIterator();

while ($collectionIterator->hasNext()) {
    echo "Book ->" . $collectionIterator->getCurrentItem()."\n";
    $collectionIterator->next();
}