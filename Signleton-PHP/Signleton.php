<?php
class LazySignleton {
  public static $instance;

  private $name ;
  private function __construct(){
    $this->name = "lazy Signleton";
  }  
  private function __clone() {}

  private function __wakeup() {}

  public static function getInstance() {
    if(!self::$instance){
        self::$instance = new self();
    }
    return self::$instance;
  }

  public  function getName() {
    return $this->name;    
  }
}



$lazyInstance=LazySignleton::getInstance();
echo $lazyInstance->getName() ."\n";

