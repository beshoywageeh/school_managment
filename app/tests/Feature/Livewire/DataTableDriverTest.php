<?php

namespace Tests\Feature\Livewire;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class DataTableDriverTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_fetch_data_returns_paginated_results(): void
    {
        User::factory()->count(5)->create();

        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'id', 'label' => '#'], ['key' => 'name', 'label' => 'Name']],
            'name' => 'users-test',
            'perPage' => 3,
        ])
            ->call('fetchData')
            ->assertDispatched('table-data-users-test');
    }

    public function test_sort_by_column(): void
    {
        User::factory()->create(['name' => 'Zara']);
        User::factory()->create(['name' => 'Anna']);
        User::factory()->create(['name' => 'Bob']);

        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'name', 'label' => 'Name', 'sortable' => true]],
            'name' => 'users-sort',
            'perPage' => 10,
        ])
            ->call('fetchData')
            ->call('sortBy', 'name')
            ->assertDispatched('table-data-users-sort', function ($name, $params) {
                return $params[0]['sort_dir'] === 'asc' && $params[0]['sort_key'] === 'name';
            })
            ->call('sortBy', 'name')
            ->assertDispatched('table-data-users-sort', function ($name, $params) {
                return $params[0]['sort_dir'] === 'desc' && $params[0]['sort_key'] === 'name';
            });
    }

    public function test_pagination_navigation(): void
    {
        User::factory()->count(10)->create();

        $component = Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'id', 'label' => '#']],
            'name' => 'users-page',
            'perPage' => 3,
        ]);

        $component->call('fetchData');
        $component->assertDispatched('table-data-users-page', function ($name, $params) {
            return $params[0]['current_page'] === 1 && $params[0]['last_page'] === 4;
        });

        $component->call('nextPage');
        $component->assertDispatched('table-data-users-page', function ($name, $params) {
            return $params[0]['current_page'] === 2;
        });

        $component->call('prevPage');
        $component->assertDispatched('table-data-users-page', function ($name, $params) {
            return $params[0]['current_page'] === 1;
        });

        $component->call('goToPage', 3);
        $component->assertDispatched('table-data-users-page', function ($name, $params) {
            return $params[0]['current_page'] === 3;
        });
    }

    public function test_prev_page_stays_at_first_page(): void
    {
        User::factory()->count(3)->create();

        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'id', 'label' => '#']],
            'name' => 'users-prev',
            'perPage' => 3,
        ])
            ->call('fetchData')
            ->call('prevPage')
            ->assertDispatched('table-data-users-prev', function ($name, $params) {
                return $params[0]['current_page'] === 1;
            });
    }

    public function test_apply_filters(): void
    {
        User::factory()->create(['name' => 'John']);
        User::factory()->create(['name' => 'Jane']);

        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'name', 'label' => 'Name']],
            'name' => 'users-filter',
            'perPage' => 10,
        ])
            ->call('fetchData')
            ->call('applyFilters', ['name' => 'John'])
            ->assertDispatched('table-data-users-filter', function ($name, $params) {
                return count($params[0]['data']) === 1;
            });
    }

    public function test_permission_gated_columns(): void
    {
        User::factory()->create(['name' => 'Test']);

        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'name', 'label' => 'Name', 'permission' => 'non-existent-permission'],
            ],
            'name' => 'users-perm',
            'perPage' => 10,
        ])
            ->call('fetchData')
            ->assertDispatched('table-data-users-perm', function ($name, $params) {
                $visibleKeys = array_column($params[0]['columns'], 'key');

                return in_array('id', $visibleKeys) && ! in_array('name', $visibleKeys);
            });
    }

    public function test_handles_empty_results(): void
    {
        Livewire::test('components.table.data-table', [
            'modelClass' => User::class,
            'columns' => [['key' => 'id', 'label' => '#']],
            'name' => 'users-empty',
            'perPage' => 10,
        ])
            ->call('fetchData')
            ->assertDispatched('table-data-users-empty', function ($name, $params) {
                return count($params[0]['data']) === 0 && $params[0]['total'] === 0;
            });
    }

    public function test_handles_errors_gracefully(): void
    {
        Livewire::test('components.table.data-table', [
            'modelClass' => 'NonExistentModel',
            'columns' => [['key' => 'id', 'label' => '#']],
            'name' => 'users-error',
            'perPage' => 10,
        ])
            ->call('fetchData')
            ->assertDispatched('table-data-users-error', function ($name, $params) {
                return isset($params[0]['error']);
            });
    }
}
