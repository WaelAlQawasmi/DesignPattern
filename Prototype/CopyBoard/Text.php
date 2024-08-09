<?php
namespace CopyBoard;
class Text implements PrototypeInterface {
   public $content;
   public $format;

    public function __construct($content, $format) {
        $this->content = $content;
        $this->format = $format;
    }
    public function __clone() {
    }
    public function __toString() {
        return $this->content ."with format -> ". $this->format ."\n";
    }

}