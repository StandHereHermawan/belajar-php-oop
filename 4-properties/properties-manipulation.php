<?php

require_once __DIR__ . "/data/PersonProperties.php";
require_once __DIR__ . "/data/PersonPropertiesWithDataType.php";
require_once __DIR__ . "/data/PersonPropertiesWithDataTypeDefaultValue.php";
require_once __DIR__ . "/data/PersonPropertiesWithDataTypeDefaultValueNullable.php";
require_once __DIR__ . "/util/showConsole.php";

$person = new PersonProperties();
$person->id = 1;
$person->name = "Arief Karditya Hermawan";
$person->email = "arief@example.com";
$person->gender = "MALE";
showObjectPersonPropertiesWithVarDump($person);

$person2 = new PersonPropertiesWithDataType();
$person2->id = 2;
$person2->name = "Hilmi Akbar";
$person2->email = "noir@example.com";
$person2->gender = "MALE";
showObjectPersonPropertiesWithVarDump($person2);

$person3 = new PersonPropertiesWithDataTypeDefaultValue();
$person3->id = 3;
$person3->name = "Bangun Paduko";
$person3->email = "bapajo@example.com";
$person3->gender = "MALE";
showObjectPersonPropertiesWithVarDump($person3);

$person4 = new PersonPropertiesWithDataTypeDefaultValueNullable();
$person4->id = 4;
$person4->name = "Jajang";
$person4->gender = "MALE";
showObjectPersonPropertiesWithVarDump($person4);
