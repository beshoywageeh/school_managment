<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_kpi_tile_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.kpi-tile label="إجمالي الطلاب" value="1,245" trend="12%" trendDirection="up" icon="users" />'
        );

        $view->assertSee('إجمالي الطلاب');
        $view->assertSee('1,245');
        $view->assertSee('12%');
    }

    public function test_kpi_tile_shows_down_trend(): void
    {
        $view = $this->blade(
            '<x-ui.kpi-tile label="المصروفات" value="320,000" trend="5%" trendDirection="down" />'
        );

        $view->assertSee('المصروفات');
        $view->assertSee('text-red-600');
    }

    public function test_dashboard_page_example_exists(): void
    {
        $this->assertFileExists(resource_path('views/backend/ui-examples/dashboard/index.blade.php'));
    }

    public function test_dashboard_page_uses_xui_components(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/dashboard/index.blade.php'));

        $this->assertStringContainsString('x-ui.kpi-tile', $content);
        $this->assertStringContainsString('x-ui.data-table', $content);
    }

    public function test_dashboard_has_chart_initialization(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/dashboard/index.blade.php'));

        $this->assertStringContainsString('ApexCharts', $content);
        $this->assertStringContainsString('donut', $content);
        $this->assertStringContainsString('area', $content);
    }
}
