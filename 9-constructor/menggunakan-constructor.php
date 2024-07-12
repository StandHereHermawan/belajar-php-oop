<?php

require_once __DIR__ . "/data/constructor.php";

$person1 = new Person("Arief", null);
$person1->sayHello("Hilmi");
$person1->sayHello(null);
var_dump($person1);