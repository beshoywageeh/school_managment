<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ActivityLogTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create();
        $this->actingAs($this->admin);
    }

    public function test_can_list_activity_logs(): void
    {
        DB::table('activity_logs')->insert([
            ['action' => 'created', 'subject_type' => 'student', 'user_id' => $this->admin->id, 'school_id' => 1],
            ['action' => 'updated', 'subject_type' => 'student', 'user_id' => $this->admin->id, 'school_id' => 1],
        ]);

        $response = $this->get(route('activity-logs.index'));

        $response->assertStatus(200);
    }

    public function test_activity_logs_can_be_filtered_by_action(): void
    {
        DB::table('activity_logs')->insert([
            ['action' => 'created', 'subject_type' => 'student', 'user_id' => $this->admin->id, 'school_id' => 1],
            ['action' => 'deleted', 'subject_type' => 'student', 'user_id' => $this->admin->id, 'school_id' => 1],
        ]);

        $response = $this->get(route('activity-logs.index', ['action' => 'created']));

        $response->assertStatus(200);
    }
}
