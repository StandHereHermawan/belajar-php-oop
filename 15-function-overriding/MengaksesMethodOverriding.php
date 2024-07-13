<?php

require_once __DIR__ . "/data/Overriding.php";

$manager = new Manager("Lucas");
$manager->sayHello("Nana");

$vp = new VicePresident("Nana");
$vp->sayHello("Lucas");
