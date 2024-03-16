<?php

namespace Kenntcky\BelajarPhpUnitTest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    /**
     * @dataProvider mathSumData
     */
    public function testSum(array $values, int $expected)
    {
        Assert::assertEquals($expected, Math::sum($values));
    }
    public function mathSumData(): array
    {
        return [
            [[2,3], 5],
            [[28,28], 56],
            [[5,2], 7],
        ];
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        Math::sum(null);
    }


}