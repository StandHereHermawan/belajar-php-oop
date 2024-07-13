<?php

require_once __DIR__ . "/data/Parent.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
$cornerShape = $shape->getCorner();
echo $cornerShape . PHP_EOL;

$rectangle = new Rectangle();
$rectangleCorner = $rectangle->getCorner();
$rectangleCornerParent = $rectangle->getParentClassCorner();
echo $rectangleCorner . PHP_EOL;
echo $rectangleCornerParent . PHP_EOL;
