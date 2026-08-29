<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class ComponentRenderTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_card_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.card icon="chart" label="لوحة التحكم" href="/dashboard" :active="true" />'
        );

        $view->assertSee('لوحة التحكم');
        $view->assertSee('href="/dashboard"', false);
        $view->assertSee('aria-current="page"', false);
    }

    public function test_button_component_renders_primary(): void
    {
        $view = $this->blade(
            '<x-ui.button variant="primary" icon="plus">إضافة</x-ui.button>'
        );

        $view->assertSee('إضافة');
        $view->assertSee('bg-primary');
    }

    public function test_button_component_renders_danger(): void
    {
        $view = $this->blade(
            '<x-ui.button variant="danger">حذف</x-ui.button>'
        );

        $view->assertSee('حذف');
        $view->assertSee('bg-danger');
    }

    public function test_status_badge_component_renders_active(): void
    {
        $view = $this->blade(
            '<x-ui.status-badge status="active" label="نشط" />'
        );

        $view->assertSee('نشط');
        $view->assertSee('bg-status-active');
        $view->assertSee('role="status"', false);
    }

    public function test_status_badge_component_renders_excluded(): void
    {
        $view = $this->blade(
            '<x-ui.status-badge status="excluded" label="مستبعد" />'
        );

        $view->assertSee('مستبعد');
        $view->assertSee('bg-status-excluded');
    }

    public function test_data_table_component_renders_with_columns(): void
    {
        $view = $this->blade(
            '<x-ui.data-table endpoint="/api/test" :columns="[[\'key\'=>\'id\',\'label\'=>\'#\'],[\'key\'=>\'name\',\'label\'=>\'الاسم\',\'sortable\'=>true]]" />'
        );

        $view->assertSee('الاسم');
        $view->assertSee('x-data="dataTable()"', false);
    }

    public function test_data_table_livewire_mode_renders_wire_attributes(): void
    {
        $view = $this->blade(
            '<x-ui.data-table :livewire="true" name="users-table" :columns="[[\'key\'=>\'id\',\'label\'=>\'#\'],[\'key\'=>\'name\',\'label\'=>\'الاسم\',\'sortable\'=>true]]" />'
        );

        $view->assertSee('الاسم');
        $view->assertSee('x-data="dataTable()"', false);
        $view->assertSee('$wire.fetchData()', false);
        $view->assertSee('$wire.sortBy(', false);
        $view->assertSee('$wire.goToPage(', false);
        $view->assertSee('x-on:table-data-users-table.window', false);
    }

    public function test_data_table_endpoint_mode_renders_init_call(): void
    {
        $view = $this->blade(
            '<x-ui.data-table endpoint="/api/test" :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]" />'
        );

        $view->assertSee('endpoint', false);
        $view->assertSee('init()', false);
        $view->assertDontSee('$wire', false);
    }

    public function test_modal_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.modal title="إضافة جديد" name="test-modal"><p>المحتوى</p></x-ui.modal>'
        );

        $view->assertSee('إضافة جديد');
        $view->assertSee('role="dialog"', false);
    }

    public function test_tabs_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.tabs :tabs="[[\'key\'=>\'details\',\'label\'=>\'التفاصيل\'],[\'key\'=>\'history\',\'label\'=>\'السجل\']]" />'
        );

        $view->assertSee('التفاصيل');
        $view->assertSee('السجل');
        $view->assertSee('role="tablist"', false);
        $view->assertSee('aria-selected', false);
        $view->assertSee('aria-controls', false);
    }
}
