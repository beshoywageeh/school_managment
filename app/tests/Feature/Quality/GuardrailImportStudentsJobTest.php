<?php

namespace Tests\Feature\Quality;

use App\Jobs\ImportStudentsJob;
use App\Models\School;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class GuardrailImportStudentsJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_inserted_row_is_scoped_to_the_job_school(): void
    {
        $schoolA = School::factory()->create();
        $schoolB = School::factory()->create();

        $rows = [
            [
                'code' => '000001',
                'name' => 'Row One',
                'birth_date' => '2012-01-01',
                'national_id' => '30101011234567',
                'user_id' => 1,
                'grade_id' => 1,
                'classroom_id' => 1,
                'school_id' => $schoolB->id,
            ],
            [
                'code' => '000002',
                'name' => 'Row Two',
                'birth_date' => '2012-01-02',
                'national_id' => '30202021234567',
                'user_id' => 1,
                'grade_id' => 1,
                'classroom_id' => 1,
            ],
        ];

        $job = new ImportStudentsJob($rows, $schoolA->id);
        $job->handle();

        $inserted = DB::table('students')->get();

        $this->assertCount(2, $inserted);
        foreach ($inserted as $row) {
            $this->assertSame($schoolA->id, $row->school_id);
        }
    }

    public function test_rows_without_any_school_id_are_skipped_when_no_school_given(): void
    {
        $rows = [
            [
                'code' => '000003',
                'name' => 'No School',
                'birth_date' => '2012-01-03',
                'national_id' => '30303031234567',
                'user_id' => 1,
                'grade_id' => 1,
                'classroom_id' => 1,
            ],
        ];

        $job = new ImportStudentsJob($rows);
        $job->handle();

        $this->assertSame(0, DB::table('students')->count());
    }
}
