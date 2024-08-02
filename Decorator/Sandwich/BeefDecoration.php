<?php
namespace Sandwich;

class BeefDecoration extends SandwichDecorator {

    public function __construct( SandwichInterface $sandwich) {
        parent::__construct($sandwich);
    }
    public function getCost(){
       return parent::getCost()+17;
    }
    public function getDescription() {
        return parent::getDescription(). ",Beef";
    }

}