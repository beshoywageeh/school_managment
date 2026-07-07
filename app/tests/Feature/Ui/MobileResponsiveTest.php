<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class MobileResponsiveTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_hamburger_button_has_aria_attributes(): void
    {
        $view = $this->blade(
            '<header>
                <button type="button"
                    x-on:click="sidebarMobileOpen = !sidebarMobileOpen"
                    class="lg:hidden p-2"
                    :aria-label="sidebarMobileOpen ? \'إغلاق القائمة\' : \'فتح القائمة\'"
                    :aria-expanded="sidebarMobileOpen.toString()">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </header>'
        );

        $view->assertSee(':aria-label="sidebarMobileOpen ? \'إغلاق القائمة\' : \'فتح القائمة\'"', false);
        $view->assertSee(':aria-expanded="sidebarMobileOpen.toString()"', false);
        $view->assertSee('lg:hidden', false);
    }

    public function test_sidebar_mobile_open_toggles(): void
    {
        $view = $this->blade(
            '<div x-data="{ sidebarMobileOpen: false }">
                <aside
                    :class="sidebarMobileOpen ? \'translate-x-0\' : \'\'"
                    class="fixed top-0 start-0 z-40 h-screen translate-x-full lg:translate-x-0">
                </aside>
                <div x-show="sidebarMobileOpen"
                    class="fixed inset-0 z-30 bg-black/50 lg:hidden"
                    x-transition.opacity>
                </div>
            </div>'
        );

        $view->assertSee('sidebarMobileOpen', false);
        $view->assertSee('translate-x-full', false);
        $view->assertSee('lg:translate-x-0', false);
    }

    public function test_table_has_horizontal_scroll_wrapper(): void
    {
        $view = $this->blade(
            '<x-ui.data-table endpoint="/api/test" :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]" />'
        );

        $view->assertSee('overflow-x-auto', false);
    }

    public function test_mobile_backdrop_has_click_handler(): void
    {
        $view = $this->blade(
            '<div x-data="{ sidebarMobileOpen: false }">
                <div x-show="sidebarMobileOpen"
                    class="fixed inset-0 z-30 bg-black/50 lg:hidden"
                    @click="sidebarMobileOpen = false">
                </div>
            </div>'
        );

        $view->assertSee('@click="sidebarMobileOpen = false"', false);
        $view->assertSee('lg:hidden', false);
    }

    public function test_data_table_has_responsive_table_element(): void
    {
        $view = $this->blade(
            '<x-ui.data-table endpoint="/api/test" :columns="[[\'key\'=>\'id\',\'label\'=>\'#\']]" />'
        );

        $view->assertSee('role="grid"', false);
        $view->assertSee('aria-label="data table"', false);
    }
}
