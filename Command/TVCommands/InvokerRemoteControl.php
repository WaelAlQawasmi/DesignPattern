<?php

namespace TVCommands;

class InvokerRemoteControl {
    public $command ;
    public function __construct(CommandInterface $command =null) {
        $this->command = $command;
    }

    public function setCommand(CommandInterface $command) {
        $this->command = $command;
    }
    public function pressButton() {
       $this->command->execute();
    }
}