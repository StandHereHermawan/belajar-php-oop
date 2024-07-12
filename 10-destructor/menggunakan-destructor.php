<?php

require_once __DIR__ . "/data/destructor.php";

$person1 = new Person("Arief", null);
var_dump($person1);
$person2 = new Person("Bangun", null);
var_dump($person2);

echo "Program Selesai" . PHP_EOL;
