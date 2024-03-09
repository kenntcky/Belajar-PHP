<?php

namespace Kenntcky\tests;

use Kenntcky\BelajarPhpUnitTest\Counter;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        echo $counter->getCounter() . PHP_EOL;
    }

    public function testOk()
    {
        echo "Sok a6" . PHP_EOL;
    }

}