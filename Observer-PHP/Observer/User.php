<?php 
namespace Observer;
class User implements subscriberInterface {
    private $name;
    public function __construct( $name)
    {
        $this->name = $name;
        
    }

    public function getName(){
        return $this->name;
    }

    public function update (String $notification){

        echo $this->getName()." you have this notification : ". $notification ."\n";
    }

}