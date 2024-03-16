<?php

namespace Kenntcky\BelajarPhpUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testOutput()
    {
        $person = new Person("Andi");
        $this->expectOutputString("Hello there, Budi. My name is " . $person->getName() . PHP_EOL);
        $person->greet("Budi");
    }

    public function testOutputException()
    {
        $person = new Person("");
        $this->expectException(\Exception::class);
        $person->greet("");
    }
}