<?php

namespace Data\AlsoTraits;

trait CanRun
{
    # Abstract Function on Trait, Harus di Override class yang menggunakan trait ini.
    public abstract function run(): void;
}

trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye in Trait SayGoodBye." . PHP_EOL;
        } else {
            echo "Good Bye in Trait SayGoodBye, $name." . PHP_EOL;
        }
    }
}

# Membuat Trait dengan function.
trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello! from Trait SayHello." . PHP_EOL;
        } else {
            echo "Hello $name! from Trait SayHello." . PHP_EOL;
        }
    }
}

# Membuat Trait dengan function dan properties.
trait HasIdentity
{
    private string $id;
    private string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
