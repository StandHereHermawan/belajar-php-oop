<?php

trait A
{
    function doA(): void
    {
        echo "Function do A in Trait A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "Function do B in Trait A" . PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
        echo "Function do A in Trait B" . PHP_EOL;
    }

    function doB(): void
    {
        echo "Function do B in Trait B" . PHP_EOL;
    }
}
