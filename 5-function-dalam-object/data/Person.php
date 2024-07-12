<?php

class Person
{
    var string $id;
    var string $name;
    var ?string $email = null;
    var string $gender = "MALE";

    function sayHello(string $name)
    {
        echo "Hello $name!" . PHP_EOL;
    }
}
