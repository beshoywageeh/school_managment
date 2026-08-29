<?php

namespace Tests\Feature\Performance;

use App\Models\MyParent;
use App\Models\School;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Tests\TestCase;

class ListPaginationTest extends TestCase
{
    use RefreshDatabase;

    public function test_configured_page_size_is_within_the_p50_budget(): void
    {
        $this->assertLessThanOrEqual(50, (int) config('school.per_page'));
    }

    public function test_core_list_is_returned_in_bounded_pages(): void
    {
        $school = School::factory()->create();
        MyParent::factory()->count(60)->create(['school_id' => $school->id]);

        $result = MyParent::query()
            ->where('school_id', $school->id)
            ->paginate(config('school.per_page'));

        $this->assertInstanceOf(LengthAwarePaginator::class, $result);
        $this->assertSame(60, $result->total());
        $this->assertLessThanOrEqual(50, $result->perPage());
        $this->assertLessThanOrEqual(50, $result->count());
        $this->assertInstanceOf(Collection::class, $result->getCollection());
    }

    public function test_representative_query_meets_p95_budget(): void
    {
        $school = School::factory()->create();
        MyParent::factory()->count(200)->create(['school_id' => $school->id]);

        $durations = [];
        for ($i = 0; $i < 10; $i++) {
            $start = hrtime(true);
            MyParent::query()
                ->where('school_id', $school->id)
                ->paginate(config('school.per_page'));
            $durations[] = (hrtime(true) - $start) / 1e6;
        }

        sort($durations);
        $p95Index = (int) ceil(0.95 * count($durations)) - 1;
        $p95 = $durations[$p95Index];

        $this->assertLessThan(500.0, $p95, "p95 timing {$p95}ms exceeded the 500ms budget.");
    }
}
