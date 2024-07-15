<?php

require_once __DIR__ . "/data/Class.php";

$arief = new Person("");
$arief->setId(0);
$arief->setName("Arief");
$arief->hello("Terry");
$arief->goodBye("Terry");
$arief->run();