<?php

function sayHello(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        # code...
        echo "Hello Backend Programmer {$programmer->getName()}" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        # code...
        echo "Hello Frontend Programmer {$programmer->getName()}" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer {$programmer->getName()}" . PHP_EOL;
    }
}
