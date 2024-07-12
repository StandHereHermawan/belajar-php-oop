<?php

class Person
{
    const AUTHOR = "ARIEF KARDITYA";
    var string $id;
    var string $name;
    var ?string $email = null;
    var string $gender = "MALE";

    function sayHello(?string $name)
    {
        switch (is_null($name)):
            case true:
                echo "Hi, my name is {$this->name}" . PHP_EOL;
                break;
            default:
                echo "Hi $name, my name is {$this->name}" . PHP_EOL;
        endswitch;
    }
}
