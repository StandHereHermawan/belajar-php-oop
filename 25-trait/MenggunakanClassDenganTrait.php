<?php

require_once __DIR__ . "/data/Class.php";

$person = new Person("", null);
$person->setId(0);
$person->setName("Terry");
$person->hello("Andrew");
$person->goodBye("Andrew");
var_dump($person);