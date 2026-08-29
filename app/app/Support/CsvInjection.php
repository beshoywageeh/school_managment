<?php

namespace App\Support;

/**
 * Guards against CSV formula (CSV/Formula) injection when exporting user-supplied
 * values to spreadsheet files.
 *
 * Values beginning with spreadsheet formula characters are prefixed with a single
 * quote so that spreadsheet software treats them as literal text instead of
 * executing them.
 */
final class CsvInjection
{
    private const FORMULA_PREFIXES = ['=', '+', '-', '@'];

    /**
     * Escape a single cell value against formula injection.
     *
     * Whitespace before a formula prefix is stripped so that values such as
     * " =SUM(A1)" are still neutralised. Plain text, numeric and null values are
     * returned unchanged.
     */
    public static function escapeFormulaCell(mixed $value): mixed
    {
        if ($value === null || is_numeric($value)) {
            return $value;
        }

        $string = (string) $value;
        $trimmed = ltrim($string);

        foreach (self::FORMULA_PREFIXES as $prefix) {
            if (str_starts_with($trimmed, $prefix)) {
                return "'".$trimmed;
            }
        }

        return $value;
    }
}
