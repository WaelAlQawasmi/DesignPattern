<?php
namespace BookCollection ;
class BookCollection {
   public array $collection;

   public function addBook($book) {
    $this->collection[]=$book;
   }
   public function createIterator() :IteratorInterface
    {
        return new BookIterator($this->collection);
    }
}