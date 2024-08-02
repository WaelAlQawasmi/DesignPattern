<?php
require 'autoload.php';
use Sandwich\BasicSandwich;
use Sandwich\BeefDecoration;
use Sandwich\CheeseDecoration;
echo'-----------basic';
$basic = new BasicSandwich();
echo $basic->getCost()."\n";
echo $basic->getDescription()."\n";

echo "-----------Beef ";
$beef = new BeefDecoration($basic);
echo $beef->getCost()."\n";
echo $beef->getDescription()."\n";

echo "-----------cheese ";
$cheese = new CheeseDecoration($basic);
echo $cheese->getCost()."\n";
echo $cheese->getDescription()."\n";

echo "-----------cheese And Beef";
$cheeseAndBeef = new CheeseDecoration($beef);
echo $cheeseAndBeef->getCost()."\n";
echo $cheeseAndBeef->getDescription()."\n";