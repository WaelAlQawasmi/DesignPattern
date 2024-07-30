<?php
require 'autoload.php';
use TVCommands\InvokerRemoteControl;
use TVCommands\ReceiverTV;
use TVCommands\TurnOnCommand;


// receiver
$TV =new ReceiverTV();
// command
$TurnOnCommand=new TurnOnCommand($TV);
// Invoker
$remoteControl = new InvokerRemoteControl($TurnOnCommand);
$remoteControl->pressButton();