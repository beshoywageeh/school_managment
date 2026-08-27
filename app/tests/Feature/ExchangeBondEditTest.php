<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExchangeBond;
use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ExchangeBondEditTest extends TestCase
{
    use RefreshDatabase;

    protected School $school;

    protected User $user;

    protected AcademicYear $year;

    protected Student $student;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->school = School::factory()->create();
        $this->user = User::factory()->create([
            'school_id' => $this->school->id,
            'isAdmin' => true,
        ]);
        $this->user->givePermissionTo(Permission::findOrCreate('exchange_bonds-edit', 'web'));

        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->school->id,
        ]);
        $this->year = AcademicYear::factory()->create([
            'school_id' => $this->school->id,
            'status' => 'active',
        ]);
        $this->student = Student::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classRoom->id,
            'acadmiecyear_id' => $this->year->id,
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Auth::login($this->user);
    }

    private function makeExchange(?string $description): ExchangeBond
    {
        return ExchangeBond::create([
            'student_id' => $this->student->id,
            'academic_year_id' => $this->year->id,
            'date' => now()->toDateString(),
            'amount' => 1000,
            'manual' => 'EB-1',
            'description' => $description,
            'user_id' => $this->user->id,
            'school_id' => $this->school->id,
        ]);
    }

    public function test_edit_page_prefills_the_saved_description(): void
    {
        $exchange = $this->makeExchange('unique-saved-description-xyz');

        $this->get(route('exchange-bonds.edit', $exchange->id))
            ->assertOk()
            ->assertSee('unique-saved-description-xyz', false);
    }

    public function test_edit_page_renders_without_error_when_description_is_empty(): void
    {
        $exchange = $this->makeExchange(null);

        $this->get(route('exchange-bonds.edit', $exchange->id))
            ->assertOk();
    }
}
