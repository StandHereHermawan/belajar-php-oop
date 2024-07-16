<?php

require_once __DIR__ . "/data/Class.php";

$data = new Data();

foreach ($data as $property => $value) { # memanggil function getIterator pada object dengan class terkait.
    echo "$property : $value" . PHP_EOL;
}
