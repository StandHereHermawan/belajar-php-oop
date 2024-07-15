<?php

use Data\Traits\Inheritance\People;

require_once __DIR__ . "/Trait.php";

class Person
{
    use People;

    public function run(): void
    {
        echo "Person with name {$this->name} and id {$this->id} is running." . PHP_EOL;
    }
}
