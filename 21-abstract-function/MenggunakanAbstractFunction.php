<?php

require_once __DIR__ . "/data/Class.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Ujang";
$cat->run();

$dog = new Dog();
$dog->name = "Rambo";
$dog->run();
