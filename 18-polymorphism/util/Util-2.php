<?php

function sayHello(Data\Programmer $programmer)
{
    echo "Hello {$programmer->getName()} as {$programmer->getTitle()}" . PHP_EOL;
}
