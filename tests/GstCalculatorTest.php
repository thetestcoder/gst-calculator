<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Thetestcoder\GstCalculator;

final class GstCalculatorTest extends TestCase
{
    #[DataProvider('gstCalculatorDataset')]
    public function test_it_calculate_gst($amount, $percentage, $expected)
    {
        // arrange the data
        $gstCalculator = new GstCalculator($percentage);

        // act on data
        $gst_amount = $gstCalculator->calculate($amount);

        // assert the response
        $this->assertSame($expected, $gst_amount);
    }

    public static function gstCalculatorDataset()
    {
        yield [100, 18, 18.0];
        yield [200, 18, 36.0];
        yield [1000, 10, 100.0];
        yield [50000, 18, 9000.0];
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