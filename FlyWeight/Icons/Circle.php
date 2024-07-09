<?php 
namespace Icons;
class Circle extends IconImp {
    public  $label='Circle';
    public function __construct() {

    }
    
    public function draw(string $color , int $size) {
        echo $this->label.' with '. $color .' and '. $size. "px" ;

    }
}