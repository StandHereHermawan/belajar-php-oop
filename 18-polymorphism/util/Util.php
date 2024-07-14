<?php

function sayHello(Programmer $programmer)
{
    echo "Hello {$programmer->getName()} as {$programmer->getTitle()}" . PHP_EOL;
}
