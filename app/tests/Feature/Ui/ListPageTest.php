<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class ListPageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_page_header_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.page-header title="الحسابات البنكية" module="primary">
                <x-slot:actions>
                    <x-ui.button variant="primary">إضافة</x-ui.button>
                </x-slot:actions>
            </x-ui.page-header>'
        );

        $view->assertSee('الحسابات البنكية');
        $view->assertSee('إضافة');
    }

    public function test_filter_panel_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.filter-panel>
                <div>فلتر</div>
            </x-ui.filter-panel>'
        );

        $view->assertSee('عرض الفلتر');
    }

    public function test_list_page_example_exists(): void
    {
        $this->assertFileExists(resource_path('views/backend/ui-examples/list/index.blade.php'));
    }

    public function test_list_page_uses_xui_components(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/list/index.blade.php'));

        $this->assertStringContainsString('x-ui.page-header', $content);
        $this->assertStringContainsString('x-ui.filter-panel', $content);
        $this->assertStringContainsString('x-ui.data-table', $content);
        $this->assertStringContainsString('x-ui.modal', $content);
        $this->assertStringContainsString('x-ui.button', $content);
    }
}
