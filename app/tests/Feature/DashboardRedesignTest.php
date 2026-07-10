<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class DashboardRedesignTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $teacher;

    protected User $accountant;

    protected School $school;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMiddleware([
            LocaleSessionRedirect::class,
            LaravelLocalizationRedirectFilter::class,
            LaravelLocalizationViewPath::class,
        ]);

        $this->school = School::factory()->create(['id' => 1]);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Teacher']);
        Role::create(['name' => 'Accountant']);

        $this->admin = User::factory()->create(['school_id' => $this->school->id]);
        $this->admin->assignRole('Admin');

        $this->teacher = User::factory()->create(['school_id' => $this->school->id]);
        $this->teacher->assignRole('Teacher');

        $this->accountant = User::factory()->create(['school_id' => $this->school->id]);
        $this->accountant->assignRole('Accountant');
    }

    public function test_authenticated_user_can_access_widgets_endpoint(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
    }

    public function test_unauthenticated_user_gets_401(): void
    {
        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(401);
    }

    public function test_admin_widgets_returns_all_stat_cards(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'statCards' => [
                '*' => ['label', 'value', 'icon', 'color', 'trend', 'trendDirection', 'sparklineData'],
            ],
            'quickActions' => [
                '*' => ['route', 'icon', 'label', 'perm'],
            ],
            'charts' => [
                'studentChart',
                'revenueTrend',
            ],
            'recentActivity',
            'permissions',
        ]);
    }

    public function test_admin_widgets_has_four_stat_cards(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(11, $response->json('statCards'));
    }

    public function test_admin_widgets_has_six_quick_actions(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(13, $response->json('quickActions'));
    }

    public function test_admin_widgets_has_both_charts(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertArrayHasKey('studentChart', $response->json('charts'));
        $this->assertArrayHasKey('revenueTrend', $response->json('charts'));
    }

    public function test_accountant_widgets_returns_fee_centric_cards(): void
    {
        $this->actingAs($this->accountant);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'statCards' => [
                '*' => ['label', 'value', 'icon', 'color', 'trend', 'trendDirection', 'sparklineData'],
            ],
            'quickActions',
            'charts',
            'recentActivity',
            'permissions',
        ]);
    }

    public function test_accountant_widgets_has_four_financial_cards(): void
    {
        $this->actingAs($this->accountant);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(4, $response->json('statCards'));
        $labels = array_map(fn ($c) => $c['label'], $response->json('statCards'));
        $this->assertContains(__('general.dashboard.invoiced'), $labels);
        $this->assertContains(__('general.dashboard.collected'), $labels);
        $this->assertContains(__('general.dashboard.pending'), $labels);
    }

    public function test_accountant_widgets_has_four_quick_actions(): void
    {
        $this->actingAs($this->accountant);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(4, $response->json('quickActions'));
    }

    public function test_accountant_widgets_hides_student_chart(): void
    {
        $this->actingAs($this->accountant);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertArrayNotHasKey('studentChart', $response->json('charts'));
    }

    public function test_teacher_widgets_returns_teaching_cards(): void
    {
        $this->actingAs($this->teacher);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'statCards' => [
                '*' => ['label', 'value', 'icon', 'color', 'trend', 'trendDirection', 'sparklineData'],
            ],
            'quickActions',
            'charts',
            'recentActivity',
            'permissions',
        ]);
    }

    public function test_teacher_widgets_has_three_teaching_cards(): void
    {
        $this->actingAs($this->teacher);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(3, $response->json('statCards'));
        $labels = array_map(fn ($c) => $c['label'], $response->json('statCards'));
        $this->assertContains(__('general.dashboard.my_students'), $labels);
        $this->assertContains(__('general.dashboard.today_schedule'), $labels);
        $this->assertContains(__('general.dashboard.pending_tasks'), $labels);
    }

    public function test_teacher_widgets_has_three_quick_actions(): void
    {
        $this->actingAs($this->teacher);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertCount(3, $response->json('quickActions'));
    }

    public function test_teacher_widgets_has_no_student_chart(): void
    {
        $this->actingAs($this->teacher);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertEmpty($response->json('charts'));
    }

    public function test_recent_activity_has_items_for_admin(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $this->assertIsArray($response->json('recentActivity'));
    }

    public function test_permissions_returned_for_admin(): void
    {
        $this->actingAs($this->admin);

        $response = $this->getJson(route('dashboard.widgets'));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'permissions' => [
                'canViewStudents',
                'canViewParents',
                'canViewEmployees',
                'canViewFinancials',
            ],
        ]);
    }
}
