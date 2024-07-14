<?php

namespace Data;

interface Vehicle
{
    function drive(): void;
    function getTotalTire(): int;
}

class Avanza implements Vehicle
{
    public function drive(): void
    {
        echo "Drive Avanza." . PHP_EOL;
    }

    public function getTotalTire(): int
    {
        return 4;
    }
}

class HinoRM280Bus implements Vehicle
{
    public function drive(): void
    {
        echo "Drive Hino RM280 Bus." . PHP_EOL;
    }

    public function getTotalTire(): int
    {
        return 6;
    }
}

class Quester3806x4 implements Vehicle
{
    public function drive(): void
    {
        echo "Drive Quester 380 6x4." . PHP_EOL;
    }

    public function getTotalTire(): int
    {
        return 10;
    }
}
