<?php

$date = new DateTime();
var_dump($date);

$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($date);
