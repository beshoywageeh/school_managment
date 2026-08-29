<?php

namespace Tests\Unit;

use App\Support\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function test_addition_is_exact_at_the_cent(): void
    {
        $this->assertSame('0.30', Money::add('0.10', '0.20'));
        $this->assertSame('0.60', Money::add('0.10', '0.50'));
    }

    public function test_subtraction_is_exact_at_the_cent(): void
    {
        $this->assertSame('0.10', Money::subtract('0.30', '0.20'));
        $this->assertSame('-0.10', Money::subtract('0.20', '0.30'));
    }

    public function test_multiplication_is_exact_at_the_cent(): void
    {
        $this->assertSame('0.51', Money::multiply('0.17', '3'));
        $this->assertSame('10.00', Money::multiply('100.00', '0.10'));
    }

    public function test_comparison_is_exact(): void
    {
        $this->assertSame(0, Money::compare('0.1', '0.10'));
        $this->assertSame(-1, Money::compare('0.10', '0.11'));
        $this->assertSame(1, Money::compare('0.11', '0.10'));
    }

    public function test_zero_detection_is_exact(): void
    {
        $this->assertTrue(Money::isZero('0.00'));
        $this->assertTrue(Money::isZero('0'));
        $this->assertFalse(Money::isZero('0.01'));
    }

    public function test_no_float_drift_across_edge_amounts(): void
    {
        $total = '0.00';
        for ($i = 0; $i < 1000; $i++) {
            $total = Money::add($total, '0.01');
        }
        $this->assertSame('10.00', $total);

        $this->assertSame('0.30', Money::subtract(Money::add('0.10', '0.20'), '0.00'));
        $this->assertSame('0.27', Money::multiply('0.09', '3'));
    }

    public function test_non_numeric_value_throws(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Money::add('not-a-number', '1.00');
    }
}
