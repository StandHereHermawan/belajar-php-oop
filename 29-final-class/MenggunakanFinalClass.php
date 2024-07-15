<?php

require_once __DIR__ . "/data/Class.php";

$socmedUnknown = new SocialMedia();
echo $socmedUnknown->getName() . PHP_EOL;

$discord = new Discord();
echo $discord->getName() . PHP_EOL;
