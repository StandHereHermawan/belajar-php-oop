<?php

require_once __DIR__ ."/data/Class.php";

$terry = new Manager("Terry");
$terry->sayHello("Davis");

$davis = new VicePresident("Davis");
$davis->sayHello("Terry");