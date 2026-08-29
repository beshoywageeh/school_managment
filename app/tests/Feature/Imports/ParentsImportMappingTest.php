<?php

namespace Tests\Feature\Imports;

use App\Imports\ParentsImport;
use App\Models\MyParent;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ParentsImportMappingTest extends TestCase
{
    use RefreshDatabase;

    public function test_parents_import_persists_every_intended_field(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);
        Auth::login($user);

        $rows = new Collection([
            [
                'Ahmed Hassan',
                '28401011234567',
                '01004567890',
                'Engineer',
                '1985-05-14',
                'University',
                'Cairo',
                'Fatma Ali',
                '28809011234567',
                '01112223344',
                'Teacher',
                '1988-11-02',
                '15 Main Street',
                'muslim',
            ],
        ]);

        (new ParentsImport)->collection($rows);

        $this->assertDatabaseCount('parents', 1);

        $parent = MyParent::withoutGlobalScopes()->first();

        $this->assertSame('Ahmed Hassan', $parent->father_name);
        $this->assertSame('28401011234567', $parent->father_national_id);
        $this->assertSame('01004567890', $parent->father_phone);
        $this->assertSame('Engineer', $parent->father_job);
        $this->assertSame('1985-05-14', $parent->father_birth_date);
        $this->assertSame('University', $parent->father_learning);
        $this->assertSame('Cairo', $parent->father_birth_location);
        $this->assertSame('Fatma Ali', $parent->mother_name);
        $this->assertSame('28809011234567', $parent->mother_national_id);
        $this->assertSame('01112223344', $parent->mother_phone);
        $this->assertSame('Teacher', $parent->mother_job);
        $this->assertSame('1988-11-02', $parent->mother_birth_date);
        $this->assertSame('15 Main Street', $parent->address);
        $this->assertSame($user->id, $parent->user_id);
        $this->assertSame($school->id, $parent->school_id);
    }
}
