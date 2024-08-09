<?php 
namespace CopyBoard;
class File implements PrototypeInterface {
    public $path;
    public $name;
    public $extension;
    public $content;

    public function __construct($path,$name,$extension, $content) {
        $this->path = $path;
        $this->name = $name;
        $this->extension = $extension;
        $this->content = $content;
    }

    public function __toString() {
        return $this->content ." on path ".$this->path.'/'.$this->name.$this->extension ."\n";
    }
    public function __clone() {
        $this->name= $this->name."(1)";
    }
}