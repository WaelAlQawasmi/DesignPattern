<?php
namespace Sandwich;
class CheeseDecoration extends SandwichDecorator {

    public function __construct( SandwichInterface $sandwich) {
        parent::__construct($sandwich);
    }
    public function getCost(){
       return parent::getCost()+10;
    }
    public function getDescription() {
        return parent::getDescription(). ",Cheese";
    }

}