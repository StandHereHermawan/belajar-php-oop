<?php

require_once __DIR__ . "/data/Class.php";
require_once __DIR__ . "/data/AnotherClass.php";

$avanza = new Avanza();
echo "Brand\t\t\t: {$avanza->getBrand()}" . PHP_EOL;
echo "Is Maintenance\t\t: {$avanza->isMaintenance()}" . PHP_EOL. PHP_EOL;

$palisade = new Palisade();
echo "Brand\t\t\t\t: {$palisade->getBrand()}" . PHP_EOL;
echo "Vehicle Name\t\t\t: {$palisade->getCarName()}" . PHP_EOL;
echo "Tires Needed\t\t\t: {$palisade->getAllTiresNeeded()}" . PHP_EOL;
echo "Oil Needed in Litres\t\t: {$palisade->getOilNeededInLitres()}" . PHP_EOL;
echo "Is Under Maintenance\t\t: {$palisade->isMaintenance()}" . PHP_EOL;
