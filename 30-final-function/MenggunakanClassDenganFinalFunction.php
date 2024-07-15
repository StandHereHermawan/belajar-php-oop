<?php

require_once __DIR__ . "/data/Class.php";

$andrew = new Human("Andrew");
var_dump($andrew);
$andrew = new Toddler("Andrew");
var_dump($andrew);
$andrew->crawling();

echo $andrew->getName() . PHP_EOL;
