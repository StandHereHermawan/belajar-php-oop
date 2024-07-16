<?php

require_once __DIR__ . "/data/Class.php";
require_once __DIR__ . "/data/IteratorAggregateWithYield.php";

$ganjil = getBilanganGanjil(10);
foreach ($ganjil as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}

$genap = getBilanganGenap(10);
foreach ($genap as $value) {
    echo "Genap : $value" . PHP_EOL;
}

$data = new Data();
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
