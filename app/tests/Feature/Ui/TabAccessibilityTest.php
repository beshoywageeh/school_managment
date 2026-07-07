<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class TabAccessibilityTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_tabs_have_keyboard_navigation(): void
    {
        $view = $this->blade(
            '<x-ui.tabs :tabs="[[\'key\'=>\'details\',\'label\'=>\'التفاصيل\'],[\'key\'=>\'history\',\'label\'=>\'السجل\']]" />'
        );

        $view->assertSee('role="tablist"', false);
        $view->assertSee('aria-selected', false);
        $view->assertSee('aria-controls', false);
        $view->assertSee('keydown.arrow-right', false);
        $view->assertSee('keydown.arrow-left', false);
    }

    public function test_tabs_use_aria_tabpanel(): void
    {
        $view = $this->blade(
            '<x-ui.tabs :tabs="[[\'key\'=>\'details\',\'label\'=>\'التفاصيل\']]" />'
        );

        $view->assertSee('role="tabpanel"', false);
        $view->assertSee('aria-labelledby', false);
    }

    public function test_tabs_have_focus_management(): void
    {
        $view = $this->blade(
            '<x-ui.tabs :tabs="[[\'key\'=>\'details\',\'label\'=>\'التفاصيل\'],[\'key\'=>\'history\',\'label\'=>\'السجل\']]" />'
        );

        $view->assertSee('tabindex', false);
    }

    public function test_tabs_render_labels(): void
    {
        $view = $this->blade(
            '<x-ui.tabs :tabs="[[\'key\'=>\'details\',\'label\'=>\'التفاصيل\'],[\'key\'=>\'history\',\'label\'=>\'السجل\']]" />'
        );

        $view->assertSee('التفاصيل');
        $view->assertSee('السجل');
    }
}
