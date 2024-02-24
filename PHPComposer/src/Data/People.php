<?php

namespace Kenntcky\Data;

class People
{

    public function __construct(private string $name)
    {
    }

    public function greet(string $name)
    {
        return "Hello $name, my name is ". $this->name . PHP_EOL;
    }

}