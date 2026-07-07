<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class SettingsHubTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_settings_hub_component_renders_card_grid(): void
    {
        $view = $this->blade(
            '<x-ui.settings-hub title="الإعدادات">
                <x-ui.card icon="building" label="بيانات المدرسة" href="/settings/school" />
                <x-ui.card icon="users" label="المستخدمون" href="/settings/users" :active="true" />
                <x-ui.card icon="calendar" label="السنة الدراسية" href="/settings/year" />
            </x-ui.settings-hub>'
        );

        $view->assertSee('الإعدادات');
        $view->assertSee('بيانات المدرسة');
        $view->assertSee('المستخدمون');
        $view->assertSee('السنة الدراسية');
    }

    public function test_settings_hub_responsive_grid_classes(): void
    {
        $view = $this->blade(
            '<x-ui.settings-hub title="الإعدادات">
                <x-ui.card icon="building" label="بيانات المدرسة" href="/settings/school" />
            </x-ui.settings-hub>'
        );

        $view->assertSee('grid-cols-1');
        $view->assertSee('md:grid-cols-2');
        $view->assertSee('lg:grid-cols-3');
    }

    public function test_settings_hub_page_example_exists(): void
    {
        $this->assertFileExists(resource_path('views/backend/ui-examples/settings/index.blade.php'));
    }

    public function test_settings_page_uses_xui_components(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/settings/index.blade.php'));

        $this->assertStringContainsString('x-ui.settings-hub', $content);
        $this->assertStringContainsString('x-ui.card', $content);
    }
}
