<?php

use Data\CovarianceContravariance\AnimalFood;

require_once __DIR__ . "/data/Covariance.php";
require_once __DIR__ . "/data/Inheritance.php";

$catShelter = new CatShelter();
$terryCat = $catShelter->adopt("Terry");
$terryCat->run();
$terryCat->eat(new AnimalFood());
