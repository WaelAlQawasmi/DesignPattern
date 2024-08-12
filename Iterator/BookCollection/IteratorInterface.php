<?php 
namespace BookCollection;
interface IteratorInterface {
    public function next();
    public function getCurrentItem();
    public function hasNext():bool;
}