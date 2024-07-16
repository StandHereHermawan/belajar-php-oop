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
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}
