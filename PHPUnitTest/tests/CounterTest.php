<?php

namespace Kenntcky\tests;

use Kenntcky\BelajarPhpUnitTest\Counter;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());

        return $counter;

    }

    /**
     * @test
     * @depends testCounter
     */
    public function second(Counter $counter)
    {
        $counter->increment();
        Assert::assertEquals(4, $counter->getCounter());
    }

}