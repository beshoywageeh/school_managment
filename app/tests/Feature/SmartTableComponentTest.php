<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmartTableComponentTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_renders_with_new_props(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'name\',\'label\'=>\'Name\',\'sortable\'=>true],[\'key\'=>\'email\',\'label\'=>\'Email\']]"
                :filters="[[\'key\'=>\'name\',\'label\'=>\'Name\',\'type\'=>\'text\']]"
                api-url="/api/items"
                :per-page="25"
                :per-page-options="[10,25,50]"
                :selectable="true"
                :searchable="true"
                export-url="/api/items/export"
            />'
        );

        $view->assertSee('Name');
        $view->assertSee('Email');
        $view->assertSee(trans('general.buttons.export'));
        $view->assertSee(trans('general.search'));
        $view->assertSee(trans('general.select_all'));
        $view->assertSee('25');
        $view->assertSee('10');
        $view->assertSee('50');
    }

    public function test_backward_compatibility_old_columns(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'name\',\'label\'=>\'Name\',\'filter_type\'=>\'text\',\'filter_key\'=>\'name\']]"
                api-url="/api/items"
            />'
        );

        $view->assertSee('Name');
    }

    public function test_pagination_display(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]"
                api-url="/api/items"
                :per-page="10"
                :per-page-options="[10,25,50]"
            />'
        );

        $view->assertSee('10');
        $view->assertSee('25');
        $view->assertSee('50');
    }

    public function test_empty_state_renders(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]"
                api-url="/api/items"
            />'
        );

        $view->assertSee(trans('general.no_data'));
    }

    public function test_error_state_renders(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]"
                api-url="/api/items"
            />'
        );

        $view->assertSee(trans('general.error_fetching'));
    }

    public function test_row_selection_renders(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]"
                api-url="/api/items"
                :selectable="true"
            />'
        );

        $view->assertSee(trans('general.select_all'));
    }

    public function test_row_click_url_renders_cursor_pointer(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]"
                api-url="/api/items"
                row-click-url="/items/{id}/edit"
            />'
        );

        $view->assertSee('cursor-pointer');
    }

    public function test_no_nested_td(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'id\',\'label\'=>\'#\'],[\'key\'=>\'actions\',\'label\'=>\'Actions\']]"
                api-url="/api/items"
            />'
        );

        $html = (string) $view;
        $this->assertStringNotContainsString('<td><td', $html);
        $this->assertStringNotContainsString('<td>'."\n".'    <td', $html);
    }

    public function test_accessibility_aria_labels(): void
    {
        $view = $this->blade(
            '<x-smart-table
                :columns="[[\'key\'=>\'name\',\'label\'=>\'Name\',\'sortable\'=>true]]"
                api-url="/api/items"
                :searchable="true"
                :selectable="true"
                :per-page-options="[10,25,50]"
            />'
        );

        $view->assertSee('aria-label', false);
        $view->assertSee(trans('general.select_all'));
    }
}
