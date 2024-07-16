<?php

$date = new DateTime();
$date->setDate(2020, 12, 30);
$date->setTime(12, 12, 12);

$date->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = true;

$date->add($dateInterval);
var_dump($date);
