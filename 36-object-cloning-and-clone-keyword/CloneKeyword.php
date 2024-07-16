<?php

require_once __DIR__ . "/data/Class.php";

$terry = new Student("", "");
$terry->setId("0");
$terry->setName("Terry");
$terry->setValue(81);

# Cloning Object cara otomatis pake clone keyword.
$terryClone = clone $terry;

# Clone object cara lama tanpa kata kunci clone.
# $terryClone = new Student("","");
# $terryClone->setId($terry->getId());
# $terryClone->setName($terry->getName());
# $terryClone->setValue($terry->getValue());

# flow clone
# $terry => clone $terryClone => $terryClone->__clone()

var_dump($terry);
var_dump($terryClone);

$andrew = new StudentWithCloneOverrided("", "");
$andrew->setId("1");
$andrew->setName("Andrew");
$andrew->setValue(85);

$andrewClone = clone $andrew;

var_dump($andrew);
var_dump($andrewClone);
