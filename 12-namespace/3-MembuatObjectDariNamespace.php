<?php

require_once __DIR__ . "/data/dengan-namespace.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

var_dump($conflict1);
var_dump($conflict2);
