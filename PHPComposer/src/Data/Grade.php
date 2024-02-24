<?php

namespace Kenntcky\Data;

class Grade
{

    public function __construct(private string $class)
    {
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): void
    {
        $this->class = $class;
    }



}