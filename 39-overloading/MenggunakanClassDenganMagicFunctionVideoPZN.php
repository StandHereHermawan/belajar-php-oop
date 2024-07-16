<?php

require_once __DIR__ . "/data/PropertiesOverloadingVideoPZN.php";

$zero1 = new ZeroVideo();

# Mengakses magic function __get().
echo $zero1->firstName . PHP_EOL;

# Mengakses magic function __set().
$zero1->firstName = "Terry";

# Mengakses magic function __isset().
isset($zero1->firstName);

# Mengakses magic function __unset().
unset($zero1->firstName);
