<?php
namespace TVCommands;
/**
 * TurnOffCommand is concrete command
 */
class TurnOffCommand implements CommandInterface {
    private $TV;
    
    public function __construct(ReceiverTV $TV) {
        $this->TV = $TV;
    }

    public function execute(){
        $this->TV->turnOff();
    }
}