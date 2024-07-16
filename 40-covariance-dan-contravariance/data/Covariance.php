<?php

require_once __DIR__ . "/Inheritance.php";

use Data\CovarianceContravariance\{Animal, Cat, Dog};

interface AnimalShelter
{
    # Covariance
    function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter
{
    function adopt(string $name): Dog
    {
        # Covariance
        $dog = new Dog();
        $dog->setName($name);
        return $dog;
    }
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        # Covariance
        $cat = new Cat();
        $cat->setName($name);
        return $cat;
    }
}
