<?php

class ZeroVideo
{
    private array $properties = [];

    # Magic Function yang Dieksekusi ketika mengakses properties yang tidak tersedia
    public function __get($name)
    {
        echo "Access property $name." . PHP_EOL;
        return "CONTOH $name";
    }

    # Magic Function yang Dieksekusi ketika mengubah properties yang tidak tersedia.
    public function __set($name, $value)
    {
        echo "Set property $name with value: $value." . PHP_EOL;
    }

    # Magic Function yang Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia.
    public function __isset($name)
    {
        echo "Iseet $name." . PHP_EOL;
        return false;
    }

    # Magic Function yang Dieksekusi ketika menggunakan unset() properties yang tidak tersedia.
    public function __unset($name)
    {
        echo "Unset $name." . PHP_EOL;
    }
}
