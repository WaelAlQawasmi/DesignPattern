<?php
namespace Icons;
class Square extends IconImp {
    public  $label='Square';

    public function __construct() {

    }

    public function draw(string $color , int $size) {
        echo $this->label.' with '. $color .' and '. $size . "px" ;

    }
}