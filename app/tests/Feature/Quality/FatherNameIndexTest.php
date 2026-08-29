<?php

namespace Tests\Feature\Quality;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class FatherNameIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_parents_father_name_column_is_indexed(): void
    {
        $indexes = Schema::getIndexes('parents');

        $matching = collect($indexes)->filter(
            fn (array $index) => in_array('father_name', $index['columns'] ?? [], true),
        );

        $this->assertTrue(
            $matching->isNotEmpty(),
            'Expected an index on parents.father_name, none found.',
        );
    }
}
