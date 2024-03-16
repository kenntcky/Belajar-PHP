<?php

namespace Kenntcky\BelajarPhpUnitTest;

class Math
{
    public static function sum(?array $values): int
    {
        if ($values == null) throw new \Exception("Input must not be null!");
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }

        return $total;
    }
}