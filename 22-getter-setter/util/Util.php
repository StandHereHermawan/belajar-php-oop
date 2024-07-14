<?php

function showProduct($product): void
{
    echo "Product name: {$product->getName()};" . PHP_EOL .
        "Product price: {$product->getPrice()}" . PHP_EOL .
        "Product Availability: {$product->isAvailable()}" . PHP_EOL;
}
