<?php

namespace Kenntcky\BelajarPhpUnitTest;

use mysql_xdevapi\Exception;

class Person
{

    public function __construct(private string $name){}

    public function greet(?string $name): void
    {
        if ($name == null) throw new \Exception("Name is null!");
        echo "Hello there, $name. My name is " . $this->name . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }



}