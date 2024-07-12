<?php

require_once __DIR__ . "/data/Person.php";

$person = new Person();
$person->name = "Arief Karditya";
$person->email = "test@example.com";
$person->sayHello("Hilmi");
