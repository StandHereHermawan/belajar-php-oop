<?php

require_once __DIR__ . "/data/ClassPrivate.php";

use Data\Product;

$product = new Product("Acer E5", 8_250_000);

echo "Produk: {$product->getName()}." . PHP_EOL . "Harga : {$product->getPrice()}." . PHP_EOL . "Deskripsi : {$product->getDescription()}" . PHP_EOL;

# echo $product->name . PHP_EOL;
# echo $product->price . PHP_EOL;

# $product->name = "Orange"; // Error;
# $product->price = 20_000; // Error;
