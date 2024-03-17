<?php

namespace Kenntcky\BelajarPhpUnitTest;

use Kenntcky\BelajarPhpUnitTest\Counter;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

//    protected function setUp(): void
//    {
//    }

    /**
     * @before
     */
//    public function createCounter(): void
//    {
//        $this->counter = new Counter();
//        echo "Created counter object" . PHP_EOL;
//    }

    static private Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
        echo "Counter test begin" . PHP_EOL;
    }

    public function testIncomplete()
    {
        self::assertEquals(0, self::$counter->getCounter());
        self::markTestIncomplete("TODO Do Increment");
    }

    public function testCounter()
    {

        self::$counter->increment();
        Assert::assertEquals(1, self::$counter->getCounter());

        self::$counter->increment();
        $this->assertEquals(2, self::$counter->getCounter());

        self::$counter->increment();
        self::assertEquals(3, self::$counter->getCounter());

        return self::$counter;

    }

    public function testAgain()
    {
        self::markTestSkipped("Unfixed bug");

        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    /**
     * @test
     * @depends testCounter
     */
    public function second(Counter $counter)
    {
        $counter->increment();
        Assert::assertEquals(4, self::$counter->getCounter());
    }

    /**
     * @requires OSFAMILY Linux
     */
    public function testLinux()
    {
        echo "Hi Linux!" . PHP_EOL;
    }

    public static function tearDownAfterClass(): void
    {
        echo "Counter test finish" . PHP_EOL;
    }

//    protected function tearDown(): void
//    {
//        echo "Unit test finish using tearDown function override" . PHP_EOL;
//    }
//
//    /**
//     * @after
//     */
//    public function after(): void
//    {
//        echo "Unit test finish using annotation after" . PHP_EOL;
//    }

}