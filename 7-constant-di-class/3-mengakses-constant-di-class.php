<?php

require_once __DIR__ . "/data/2-constant-in-class.php";

define("APPLICATION", "belajar php oop");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;
