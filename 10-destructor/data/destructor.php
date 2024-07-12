<?php

class Person
{
    const AUTHOR = "ARIEF KARDITYA";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    # Constructor 
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    # Destructor
    function __destruct()
    {
        echo "Object Person {$this->name} is destroyed." . PHP_EOL;
    }

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

    function infoAUTHOR()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}
