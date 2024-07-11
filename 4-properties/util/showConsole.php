<?php

function showObjectPersonProperties($person)
{
    echo PHP_EOL . "ID\t: {$person->id}" . PHP_EOL;
    echo "Name\t: {$person->name}" . PHP_EOL;
    echo "Email\t: {$person->email}" . PHP_EOL;
    echo "Gender\t: {$person->gender}" . PHP_EOL . PHP_EOL;
}

function showObjectPersonPropertiesWithVarDump($person){
    showObjectPersonProperties($person);
    var_dump($person);
}