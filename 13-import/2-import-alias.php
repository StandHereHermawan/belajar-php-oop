<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1("Arief");
$conflict1->infoVersion();

$conflict2 = new Conflict2("Hilmi");
$conflict2->infoVersion();

help();
echo APP . PHP_EOL;
