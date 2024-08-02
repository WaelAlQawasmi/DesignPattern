<?php
namespace Sandwich;

class BasicSandwich implements SandwichInterface {
    public function getCost(){
        return 10;
    }
    public function getDescription() {
        return "Bread";
    }
}
