<?php

namespace Tests\Unit;

use App\Support\CsvInjection;
use PHPUnit\Framework\TestCase;

class CsvInjectionTest extends TestCase
{
    public function test_formula_prefixes_are_escaped_with_a_single_quote(): void
    {
        $this->assertSame("'=SUM(A1:B1)", CsvInjection::escapeFormulaCell('=SUM(A1:B1)'));
        $this->assertSame("'+1+1", CsvInjection::escapeFormulaCell('+1+1'));
        $this->assertSame("'-1-1", CsvInjection::escapeFormulaCell('-1-1'));
        $this->assertSame("'@SUM(A1:B1)", CsvInjection::escapeFormulaCell('@SUM(A1:B1)'));
    }

    public function test_whitespace_leading_formula_is_also_escaped(): void
    {
        $this->assertSame("'=SUM(A1)", CsvInjection::escapeFormulaCell("\t=SUM(A1)"));
        $this->assertSame("'=SUM(A1)", CsvInjection::escapeFormulaCell('  =SUM(A1)'));
    }

    public function test_plain_values_are_left_unchanged(): void
    {
        $this->assertSame('Alice', CsvInjection::escapeFormulaCell('Alice'));
        $this->assertSame('12345', CsvInjection::escapeFormulaCell('12345'));
        $this->assertSame('1+2', CsvInjection::escapeFormulaCell('1+2'));
        $this->assertSame('', CsvInjection::escapeFormulaCell(''));
    }

    public function test_null_stays_null_and_numeric_stays_numeric(): void
    {
        $this->assertNull(CsvInjection::escapeFormulaCell(null));
        $this->assertSame(42, CsvInjection::escapeFormulaCell(42));
        $this->assertSame(42.5, CsvInjection::escapeFormulaCell(42.5));
    }
}
