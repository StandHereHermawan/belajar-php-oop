<?php

require_once __DIR__ . "/data/Class.php";

$student1 = new Student("", "");
$student1->setId(0);
$student1->setName("Terry");
$student1->setValue(100);

# Memanggil magic function __toString() pada class Student.
$stringStudent1 = (string)$student1;
echo $stringStudent1 . PHP_EOL;

# Memanggil magic function __toString() pada class Student.
echo $student1 . PHP_EOL;

# Memanggil magic function __invoke() pada class Student.
$student1("Arief", 1, true, 12, "Hermawan");

# Memanggil magic function __debugInfo() pada class Student.
var_dump($student1);
