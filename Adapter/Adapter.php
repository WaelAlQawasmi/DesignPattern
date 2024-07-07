<?php 
require 'autoload.php';
use Payment\PaymentApp;
$payForStuff= new  PaymentApp();
$payForStuff->pay(10);