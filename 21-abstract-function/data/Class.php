<?php

namespace Data;

abstract class Animal
{
    public string $name;

    public abstract function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "$this->name Cat is Running." . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "$this->name Dog is Running." . PHP_EOL;
    }
}
