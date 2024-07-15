<?php

class Human
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    # Final Function. Tidak bisa di override di class turunan class yang memiliki final function.
    final public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Toddler extends Human
{

    public function crawling(): void
    {
        echo "Toddler {$this->getName()} is Crawling." . PHP_EOL;
    }

    # Error, tidak bisa Override Function.
    # public function setName(string $name): void
    # {
    #     $this->name = $name;
    # }
}

class Family
{
    private Human $human;

    public function __construct(Human $human)
    {
        $this->human = $human;
    }

    public function getHuman(): Human
    {
        return $this->human;
    }

    public function setHuman(Human $human): void
    {
    }
}
