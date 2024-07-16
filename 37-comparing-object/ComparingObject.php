<?php

require_once __DIR__ . "/data/Class.php";

$student1 = new Student("", "");
$student1->setId(1);
$student1->setName("Andrew");
$student1->setValue(100);

$student2 = new Student("", "");
$student2->setId(1);
$student2->setName("Andrew");
$student2->setValue(100);

echo "var_dump(\$student1 == \$student2) = ";
var_dump($student1 == $student2);
echo PHP_EOL;

echo "var_dump(\$student1 === \$student2) = ";
var_dump($student1 === $student2);
echo PHP_EOL;

echo "var_dump(\$student1 === \$student1) = ";
var_dump($student1 === $student1);
echo PHP_EOL;

# OPERATOR == untuk validasi apakah object memiliki property dan nilai property yang sama atau tidak.

# OPERATOR === untuk validasi apakah object berada pada lokasi memori yang sama apa tidak.
# digunakan untuk validasi apakah 2 object ini adalah object yang sama dan 1 alamat memori atau tidak.
# jika di var_dump() menghasilkan bool(true), object berada pada lokasi memori yang sama.