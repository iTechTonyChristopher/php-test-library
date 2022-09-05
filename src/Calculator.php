<?php

namespace Itechtonychristopher\PhpTestLibrary;

class Calculator
{
    /**
     * Add two numbers together
     *
     * @param integer|float $a
     * @param integer|float $b
     * @return integer|float
     */
    public function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}
