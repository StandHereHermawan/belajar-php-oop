<?php

class Data implements IteratorAggregate
{
    var string $first = "First Value";
    public string $second = "Second Value";
    private string $third = "Third Value";
    protected string $fourth = "Fourth Value";

    # Object Iteration function.
    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth
        ];

        return new ArrayIterator($array);
    }
}
