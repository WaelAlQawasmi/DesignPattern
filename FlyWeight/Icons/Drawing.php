<?php 
namespace Icons ;
class Drawing{
    public static function drawingCircle(string $color, int $size){
        $circle= IconFactory::getIcon("Circle");
        $circle->draw($color,$size);
    }
    public static function drawingSquare(string $color, int $size){
        $square= IconFactory::getIcon("Square");
        $square->draw($color,$size);
    }
}
