<?php

interface HelloWorld
{
    function sayHello(): void;
}

# Anonymous Class.
$helloWorld = new class implements HelloWorld
{
    function sayHello(): void
    {
        echo "Hello World in Anonymous Class." . PHP_EOL;
    }
};

$helloWorld->sayHello();

# Anonymous Class dengan Constructor.
$helloWorld = new class("Anonymous Class") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello World In $this->name, Again." . PHP_EOL;
    }
};

$helloWorld->sayHello();


# Anonymous Class dengan Destructor.
$helloWorld = new class("Foo") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "Object dari Class $this->name Dihancurkan.". PHP_EOL;
    }

    function sayHello(): void
    {
        echo "Hello World In Class $this->name, Again." . PHP_EOL;
    }
};

$helloWorld->sayHello();