<?php

require_once __DIR__ . "/Trait.php";

use Data\AlsoTraits\{SayGoodBye, SayHello, HasIdentity, CanRun};

class Person extends ParentPerson
{
    use SayGoodBye, SayHello, HasIdentity, CanRun {
        # SayHello::hello as private;
        # SayGoodBye::goodBye as private;
    }

    # Override Function Abstract Function di Trait CanRun. 
    public function run(): void
    {
        echo "Person with name {$this->name} is Running." . PHP_EOL;
    }

    # # Override trait SayGoodBye and Parent Class.
    # function goodBye(?string $name): void
    # {
    #     echo "Good Bye in Person, Child of Class ParentPerson. Override SayGoodBye Trait, $name." . PHP_EOL;
    # }

    # # Override trait SayHello and Parent Class.
    # function hello(?string $name): void
    # {
    #     echo "Hello in Person, Child of Class ParentPerson. Override SayHello Trait, $name." . PHP_EOL;
    # }

    function goodByeFromParentClass(?string $name): void
    {
        parent::goodBye($name);
    }
}

class ParentPerson
{
    # Overrided by Trait in Child Class.
    function hello(?string $name): void
    {
        echo "Hello in Parent Person, $name." . PHP_EOL;
    }

    # Overrided by Trait in Child Class.
    function goodBye(?string $name): void
    {
        echo "Good Bye in Parent Person, $name." . PHP_EOL;
    }
}
