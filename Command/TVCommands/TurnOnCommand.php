<?php 
namespace TVCommands;
/**
 * TurnOnCommand is concrete command
 */
class TurnOnCommand implements CommandInterface {
    private $TV;
    public function __construct(ReceiverTV $TV) {
        $this->TV = $TV;
    }
    public function execute(){
        $this->TV->turnOn();
    }
}