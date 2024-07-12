<?php

require_once __DIR__ . "/data/Person.php";

$test = new Person();
$test->id = 0;
$test->name = "Test";
$test->email = "test";
$test->sayHello("");

$test2 = new Person();
$test2->id = 0;
$test2->name = "Test2";
$test2->email = "test";
$test2->sayHello(null);

$test3 = new Person();
$test3->id = 0;
$test3->name = "Test3";
$test3->email = "test";
$test3->sayHello("Joko");
