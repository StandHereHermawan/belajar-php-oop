<?php

require_once __DIR__ . "/data/Class.php";

$sample = new TraitConflict();
$sample->doA();
$sample->doB();
