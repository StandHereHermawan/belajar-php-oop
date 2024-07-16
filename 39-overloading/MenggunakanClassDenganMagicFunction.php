<?php

require_once __DIR__ . "/data/PropertiesOverloading.php";

$zero1 = new ZeroSlide();
$zero1->firstName = "Terry";
$zero1->middleName = "Andrew";
$zero1->lastName = "Davis";

echo "First Name : $zero1->firstName" . PHP_EOL;
echo "Middle Name : $zero1->firstName" . PHP_EOL;
echo "Last Name : $zero1->firstName" . PHP_EOL;

echo var_dump(isset($zero1->firstName));
echo var_dump(isset($zero1->middleName));
echo var_dump(isset($zero1->lastName));

unset($zero1->firstName);
unset($zero1->middleName);
unset($zero1->lastName);

echo var_dump(isset($zero1->firstName));
echo var_dump(isset($zero1->middleName));
echo var_dump(isset($zero1->lastName));

$zero1->sayHello("Terry", "Davis");
ZeroSlide::sayHello("Terry","Davis");