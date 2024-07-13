<?php

class Manager
{
    var string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hello $name, my name is Vice President $this->name" . PHP_EOL;
    }
}
