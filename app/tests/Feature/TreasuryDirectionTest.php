<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\FundAccount;
use App\Models\Grade;
use App\Models\School;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use App\Services\Finance\AccountService;
use App\Services\Finance\InvoiceService;
use App\Services\PaymentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class TreasuryDirectionTest extends TestCase
{
    use RefreshDatabase;

    protected School $school;

    protected User $user;

    protected Grade $grade;

    protected ClassRoom $classRoom;

    protected AcademicYear $year;

    protected Student $student;

    protected SchoolFee $schoolFee;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->school = School::factory()->create();
        $this->user = User::factory()->create([
            'school_id' => $this->school->id,
            'isAdmin' => true,
        ]);

        $this->grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->classRoom = ClassRoom::factory()->create([
            'grade_id' => $this->grade->id,
            'school_id' => $this->school->id,
        ]);

        $this->year = AcademicYear::factory()->create([
            'school_id' => $this->school->id,
            'status' => 'active',
        ]);

        $this->student = Student::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'acadmiecyear_id' => $this->year->id,
        ]);

        $this->schoolFee = SchoolFee::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'academic_year_id' => $this->year->id,
            'amount' => 1000,
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Auth::login($this->user);
    }

    private function treasuryBalance(): float
    {
        $schoolId = $this->school->id;

        return (float) DB::table('fund_accounts')->where('school_id', $schoolId)->sum('Debit')
            - (float) DB::table('fund_accounts')->where('school_id', $schoolId)->sum('Credit');
    }

    private function giveStudentDebit(float $amount): void
    {
        StudentAccount::create([
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'academic_year_id' => $this->year->id,
            'school_id' => $this->school->id,
            'type' => 'invoice',
            'date' => now()->toDateString(),
            'debit' => $amount,
            'credit' => 0,
        ]);
    }

    public function test_fee_invoice_receipt_increases_treasury_balance(): void
    {
        $invoice = app(InvoiceService::class)->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $before = $this->treasuryBalance();

        $paymentService = app(PaymentService::class);
        $result = $paymentService->handleFeeInvoice(
            new Request([
                'student_id' => $this->student->id,
                'feeInvoice' => $invoice->id,
            ]),
            app(\App\Services\Finance\FinancialService::class),
            $this->school,
        );

        $this->assertIsArray($result);
        $after = $this->treasuryBalance();
        $this->assertEqualsWithDelta($before + 1000, $after, 0.01);

        $fund = FundAccount::where('school_id', $this->school->id)->first();
        $this->assertNotNull($fund);
        $this->assertEquals(1000.0, (float) $fund->Debit);
        $this->assertEquals(0.0, (float) $fund->Credit);
    }

    public function test_disbursement_store_decreases_treasury_balance(): void
    {
        $this->giveStudentDebit(2000);
        $before = $this->treasuryBalance();

        $exchange = app(AccountService::class)->createOrUpdateExchangeBond(
            $this->school,
            new Request([
                'student_id' => $this->student->id,
                'manual' => 'EB-1',
                'amount' => 1000,
                'note' => 'disbursement',
            ]),
            $this->year->id,
        );

        $this->assertNotNull($exchange->id);
        $after = $this->treasuryBalance();
        $this->assertEqualsWithDelta($before - 1000, $after, 0.01);

        $fund = FundAccount::where('school_id', $this->school->id)->first();
        $this->assertNotNull($fund);
        $this->assertEquals(1000.0, (float) $fund->Credit);
        $this->assertEquals(0.0, (float) $fund->Debit);
    }

    public function test_exchange_bond_update_keeps_disbursement_direction_with_delta(): void
    {
        $this->giveStudentDebit(2000);

        $exchange = app(AccountService::class)->createOrUpdateExchangeBond(
            $this->school,
            new Request([
                'student_id' => $this->student->id,
                'manual' => 'EB-1',
                'amount' => 1000,
                'note' => 'disbursement',
            ]),
            $this->year->id,
        );

        $this->user->givePermissionTo(
            \Spatie\Permission\Models\Permission::findOrCreate(
                'exchange_bonds-edit',
                'web',
            ),
        );

        $this->put(route('exchange-bonds.update', $exchange->id), [
            'id' => $exchange->id,
            'manual' => 'EB-1-updated',
            'amount' => 1500,
            'note' => 'updated note',
        ])->assertSessionHasNoErrors();

        $fund = FundAccount::where('school_id', $this->school->id)->first();
        $this->assertNotNull($fund);
        $this->assertEquals(1500.0, (float) $fund->Credit);
        $this->assertEquals(0.0, (float) $fund->Debit);

        $this->assertDatabaseHas('fund_accounts', [
            'exchange_bond_id' => $exchange->id,
            'Credit' => 1500,
            'Debit' => 0,
        ]);
    }

    public function test_repeated_edit_cycles_never_drift_treasury_balance(): void
    {
        $this->giveStudentDebit(5000);

        $exchange = app(AccountService::class)->createOrUpdateExchangeBond(
            $this->school,
            new Request([
                'student_id' => $this->student->id,
                'manual' => 'EB-1',
                'amount' => 1000,
                'note' => 'disbursement',
            ]),
            $this->year->id,
        );

        $this->user->givePermissionTo(
            \Spatie\Permission\Models\Permission::findOrCreate(
                'exchange_bonds-edit',
                'web',
            ),
        );

        foreach ([1500, 1200, 2000] as $amount) {
            $this->put(route('exchange-bonds.update', $exchange->id), [
                'id' => $exchange->id,
                'manual' => 'EB-1',
                'amount' => $amount,
                'note' => 'updated',
            ])->assertSessionHasNoErrors();
        }

        $this->assertSame(1, DB::table('fund_accounts')
            ->where('school_id', $this->school->id)
            ->count());

        $this->assertEqualsWithDelta(
            -2000,
            $this->treasuryBalance(),
            0.01,
        );

        $this->assertDatabaseHas('fund_accounts', [
            'exchange_bond_id' => $exchange->id,
            'Credit' => 2000,
            'Debit' => 0,
        ]);
    }
}
