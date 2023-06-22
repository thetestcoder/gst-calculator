<?php

namespace Thetestcoder;

use InvalidArgumentException;

class GstCalculator
{
    private float $percentage;

    public function __construct(float $percentage)
    {
        $this->percentage = $percentage;
    }

    public function calculate(float $amount): float
    {
        if (!$this->isPercentageValid()) {
            throw new InvalidArgumentException("Percentage should be in range of 0 to 100");
        }

        if (!$this->isAmountValid($amount)) {
            throw new InvalidArgumentException("Amount should not be negative");
        }

        return $amount * ($this->percentage / 100);
    }

    private function isAmountValid($amount): bool
    {
        return $amount > 0;
    }

    private function isPercentageValid(): bool
    {
        return $this->percentage > 0 && $this->percentage < 100;
    }
}