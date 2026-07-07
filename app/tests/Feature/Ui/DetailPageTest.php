<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class DetailPageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_detail_header_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.detail-header
                title="بنك الرياض"
                status="active"
                statusLabel="نشط"
                :balance="150000">
                <x-slot:actions>
                    <x-ui.button variant="secondary">تعديل</x-ui.button>
                </x-slot:actions>
            </x-ui.detail-header>'
        );

        $view->assertSee('بنك الرياض');
        $view->assertSee('نشط');
        $view->assertSee('150,000');
    }

    public function test_detail_page_example_exists(): void
    {
        $this->assertFileExists(resource_path('views/backend/ui-examples/detail/index.blade.php'));
    }

    public function test_detail_page_uses_xui_components(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/detail/index.blade.php'));

        $this->assertStringContainsString('x-ui.detail-header', $content);
        $this->assertStringContainsString('x-ui.tabs', $content);
        $this->assertStringContainsString('x-ui.status-badge', $content);
        $this->assertStringContainsString('x-ui.data-table', $content);
        $this->assertStringContainsString('x-ui.button', $content);
    }
}
