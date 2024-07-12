<?php

require_once __DIR__ . "/data/inheritance.php";

$emak = new Person("Emak");
$emak->sayHello("Arief");

# mengakses method parent.
$arief = new Teen("Arief");
$arief->sayHello("Emak");
