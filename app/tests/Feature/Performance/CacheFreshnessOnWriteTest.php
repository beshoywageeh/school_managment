<?php

namespace Tests\Feature\Performance;

use App\Enums\Payment_Type;
use App\Models\School;
use App\Models\StudentAccount;
use App\Services\DashboardService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CacheFreshnessOnWriteTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_financial_read_reflects_a_new_write_immediately(): void
    {
        $school = School::factory()->create();
        $service = app(DashboardService::class);

        $before = $service->getFinancialData($school->id);
        $this->assertSame(0, (int) $before['credit']);

        StudentAccount::create([
            'student_id' => 1,
            'grade_id' => 1,
            'classroom_id' => 1,
            'academic_year_id' => 1,
            'date' => now()->toDateString(),
            'type' => Payment_Type::FEE_INVOICE,
            'debit' => 250,
            'credit' => 0,
            'school_id' => $school->id,
        ]);

        $after = $service->getFinancialData($school->id);

        $this->assertSame(250, (int) $after['credit']);
    }
}
