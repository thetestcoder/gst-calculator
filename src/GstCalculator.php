<?php

namespace Thetestcoder;

use InvalidArgumentException;

class GstCalculator
{
    public function calculate(float $amount, float $percentage): float
    {
        if ($percentage > 100) {
            throw new InvalidArgumentException("Percentage should not be greater than 100");
        }

        if ($amount < 0 || $percentage < 0) {
            throw new InvalidArgumentException("Amount and percentage should not be negative");
        }

        return $amount * ($percentage / 100);
    }
}