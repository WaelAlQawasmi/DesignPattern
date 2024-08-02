<?php
namespace Sandwich;
class SandwichDecorator implements SandwichInterface {
    public $sandwich;

    public function __construct( SandwichInterface $sandwich) {
        $this->sandwich = $sandwich;
    }
    public function getCost(){
        return $this->sandwich->getCost();
    }
    public function getDescription(){
        return $this->sandwich->getDescription();
    }
}