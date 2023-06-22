<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Thetestcoder\GstCalculator;

final class GstCalculatorTest extends TestCase
{
    public function test_it_calculate_gst()
    {
        // arrange the data
        $percentage = 18;
        $amount = 100;
        $gstCalculator = new GstCalculator($percentage);

        // act on data
        $gst_amount = $gstCalculator->calculate($amount);

        // assert the response
        $this->assertSame(18.0, $gst_amount);
    }

    public function test_it_calculate_gst_with_200_amount()
    {
        // arrange the data
        $percentage = 18;
        $amount = 200;
        $gstCalculator = new GstCalculator($percentage);

        // act on data
        $gst_amount = $gstCalculator->calculate($amount);

        // assert the response
        $this->assertSame(36.0, $gst_amount);
    }

    public function test_percentage_value_should_not_be_greater_than_100()
    {
        // expect the exception
        $this->expectException(\InvalidArgumentException::class);

        // arrange the data
        $percentage = 101;
        $amount = 200;
        $gstCalculator = new GstCalculator($percentage);

        // act on data
        $gst_amount = $gstCalculator->calculate($amount);
    }

    public function test_percentage_and_amount_should_be_unsigned()
    {
        // expect the exception
        $this->expectException(\InvalidArgumentException::class);

        // arrange the data
        $percentage = -101;
        $amount = -200;
        $gstCalculator = new GstCalculator($percentage);

        // act on data
        $gst_amount = $gstCalculator->calculate($amount);
    }


}