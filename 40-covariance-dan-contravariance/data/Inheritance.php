<?php

namespace Data\CovarianceContravariance;

abstract class Animal
{
    private string $name;

    public abstract function run(): void;

    # Contravariance
    public abstract function eat(SpecificAnimalFood $food): void;
}

class Food
{
    # Food Code.
}

class AnimalFood extends Food
{
    # AnimalFood code.
}

class SpecificAnimalFood extends AnimalFood
{
    # SpecificAnimalFood code.
}

class Cat extends Animal
{
    use HasName;

    public function run(): void
    {
        echo "Cat $this->name is Running." . PHP_EOL;
    }

    # Contravariance
    public function eat(AnimalFood $food): void
    {
        echo "Cat $this->name eat " . get_class($food) . "." . PHP_EOL;
    }
}

class Dog extends Animal
{
    use HasName;

    public function run(): void
    {
        echo "Dog $this->name is Running." . PHP_EOL;
    }

    # Contravariance
    public function eat(AnimalFood $food): void
    {
        echo "Dog $this->name eat " . get_class($food) . "." . PHP_EOL;
    }
}

trait HasName
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
