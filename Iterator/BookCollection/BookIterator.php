<?php
namespace  BookCollection;
class BookIterator implements IteratorInterface {
    public $collection;
    private $currentPosition=0;
    private $collectionLength;
    public function __construct( array $collection){
        $this->collection = $collection;
        $this->collectionLength=count($this->collection);
    }
    public function next(){
        $this->currentPosition++;
    }
    public function hasNext():bool{ 
        return $this->currentPosition < $this->collectionLength;
    }
    public function getCurrentItem (){
       return $this->collection[$this->currentPosition];
    }
}