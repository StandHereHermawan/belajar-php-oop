<?php

class Person
{
    const AUTHOR = "ARIEF KARDITYA";
    private string $id;
    private string $name;
    private ?string $email = null;
    private string $gender = "NOT_MENTION";

    public function __construct(string $id, string $name, ?string $email = null, ?string $gender = "NOT_MENTION")
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
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
