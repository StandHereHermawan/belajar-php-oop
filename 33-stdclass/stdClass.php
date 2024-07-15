<?php

$array = [
    "firstName" => "Terry",
    "middleName" => "Andrew",
    "lastName" => "Davis",
];

$object = (object)$array;

var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$backToArray = (array)$object;
var_dump($backToArray);

require_once __DIR__ ."/data/Class.php";

$person = new Person("0", "Arief");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);