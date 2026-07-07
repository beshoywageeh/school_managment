<?php

namespace Tests\Feature\Ui;

use Tests\TestCase;

class LayoutShellTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_login_page_has_rtl_direction(): void
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertSee('dir="rtl"', false);
    }

    public function test_login_page_loads(): void
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertSee('تسجيل الدخول');
    }
}
