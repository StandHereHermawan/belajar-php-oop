<?php

require_once __DIR__ . "/data/Class.php";
require_once __DIR__ . "/util/Util.php";

use Data\ProductGeneral as Product;

$acere5 = new Product();
$acere5->setName("Acer E5");
$acere5->setDescription("Laptop Acer");
$acere5->setPrice(8_250_000);
$acere5->setAvailable(true);

$acere5->setName("       ");
showProduct($acere5);
