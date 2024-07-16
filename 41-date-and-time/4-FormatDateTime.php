<?php

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
echo $date->format("Y-m-d H:i:s") . PHP_EOL;
