<?php

namespace Kenntcky\BelajarPhpUnitTest;

class Counter
{
    private int $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }

}