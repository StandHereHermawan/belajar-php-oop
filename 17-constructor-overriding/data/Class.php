<?php

class Manager
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->title $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "", string $title = "Vice President")
    {
        # Tidak wajib, tapi direkomendasikan.
        parent::__construct($name, $title);
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->title $this->name" . PHP_EOL;
    }
}
