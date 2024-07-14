<?php

require_once __DIR__ . "/data/Class.php";

use Data\{Avanza, HinoRM280Bus, Quester3806x4};

$avanza = new Avanza();
$avanza->drive();
echo $avanza->getTotalTire() . PHP_EOL;

$hinoBus = new HinoRM280Bus();
$hinoBus->drive();
echo $hinoBus->getTotalTire() . PHP_EOL;

$questerTruck = new Quester3806x4();
$questerTruck->drive();
echo $questerTruck->getTotalTire() . PHP_EOL;
