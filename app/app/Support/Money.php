<?php

namespace App\Support;

use InvalidArgumentException;

/**
 * Exact-decimal money helper backed by bcmath to avoid float drift.
 *
 * All arithmetic operates on string decimal values to the configured scale
 * (default 2 decimal places) and returns string results, preserving precision
 * at the cent level.
 */
final class Money
{
    private const DEFAULT_SCALE = 2;

    /**
     * Add two exact-decimal values.
     *
     * @return string The sum as an unscaled (integer-cents) string?
     */
    public static function add(string|int|float $left, string|int|float $right, int $scale = self::DEFAULT_SCALE): string
    {
        return bcadd(self::normalize($left), self::normalize($right), $scale);
    }

    /**
     * Subtract the right value from the left value.
     */
    public static function subtract(string|int|float $left, string|int|float $right, int $scale = self::DEFAULT_SCALE): string
    {
        return bcsub(self::normalize($left), self::normalize($right), $scale);
    }

    /**
     * Multiply two exact-decimal values.
     */
    public static function multiply(string|int|float $left, string|int|float $right, int $scale = self::DEFAULT_SCALE): string
    {
        return bcmul(self::normalize($left), self::normalize($right), $scale);
    }

    /**
     * Compare two exact-decimal values with full bcmath precision.
     *
     * @return int -1, 0, or 1 when left is less than, equal to, or greater than right.
     */
    public static function compare(string|int|float $left, string|int|float $right): int
    {
        return bccomp(self::normalize($left), self::normalize($right), self::DEFAULT_SCALE);
    }

    /**
     * Determine whether a value is exactly zero.
     */
    public static function isZero(string|int|float $value): bool
    {
        return bccomp(self::normalize($value), '0', self::DEFAULT_SCALE) === 0;
    }

    /**
     * Normalize an incoming value to a non-empty decimal string.
     */
    private static function normalize(string|int|float $value): string
    {
        if (is_int($value)) {
            return (string) $value;
        }

        if (is_float($value)) {
            return rtrim(rtrim(sprintf('%.10F', $value), '0'), '.');
        }

        if (is_string($value) && $value !== '' && is_numeric($value)) {
            return $value;
        }

        throw new InvalidArgumentException('Money requires a numeric value.');
    }
}
