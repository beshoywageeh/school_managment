<?php

namespace Tests\Feature\Reports;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Student;

class ReportAuthorizationTest extends ReportTestCase
{
    /**
     * @return array<string, array{method: string, route: string, params: array<string, mixed>}>
     */
    private function exportRoutes(): array
    {
        return [
            'students-export' => ['method' => 'get', 'route' => 'report.export-student', 'params' => []],
            'stocks-product' => ['method' => 'get', 'route' => 'report.stock-product', 'params' => []],
            'books-sheets' => ['method' => 'get', 'route' => 'report.books-sheets', 'params' => []],
            'clothes-stocks' => ['method' => 'get', 'route' => 'report.clothes-stocks', 'params' => []],
            'school-fees' => ['method' => 'get', 'route' => 'report.school-fees', 'params' => []],
            'exception-fee' => ['method' => 'post', 'route' => 'report.exception-fee', 'params' => [
                'start_date' => '2026-01-01',
                'end_date' => '2026-01-31',
            ]],
            'stock' => ['method' => 'post', 'route' => 'report.stock', 'params' => ['stock' => 1]],
            'book-sheet-stock' => ['method' => 'post', 'route' => 'report.book-sheet-stock', 'params' => ['stock' => 1]],
            'clothe-stock' => ['method' => 'post', 'route' => 'report.clothes-stock', 'params' => ['stock' => 1]],
            'student-report' => ['method' => 'post', 'route' => 'report.student-report', 'params' => [
                'type' => 41,
                'classroom_id' => 1,
            ]],
            'student-tameen' => ['method' => 'post', 'route' => 'report.student-tameen', 'params' => [
                'type' => 1,
                'classroom_id' => 1,
            ]],
            'payment-status' => ['method' => 'post', 'route' => 'report.payment-status', 'params' => [
                'payment_status' => 'all',
            ]],
            'fees-invoices' => ['method' => 'post', 'route' => 'report.fees-invoices', 'params' => [
                'payment_status' => 'all',
            ]],
            'payments' => ['method' => 'post', 'route' => 'report.payments', 'params' => [
                'from' => '2026-01-01',
                'to' => '2026-01-31',
            ]],
            'payment-parts' => ['method' => 'post', 'route' => 'report.payment-parts', 'params' => [
                'from' => '2026-01-01',
                'to' => '2026-01-31',
            ]],
            'credit' => ['method' => 'post', 'route' => 'report.credit', 'params' => ['acc_year' => 1]],
            'final-year' => ['method' => 'post', 'route' => 'report.final-year', 'params' => []],
        ];
    }

    public function test_index_requires_reports_view_permission(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school, []);

        $this->get(route('report.index'))->assertForbidden();
    }

    public function test_index_accessible_with_reports_view_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school, ['reports-view']);

        $this->get(route('report.index'))->assertOk();
    }

    public function test_export_routes_require_reports_export_permission(): void
    {
        $school = $this->school();
        $this->activeAcademicYear($school);
        $this->actingAsReportUser($school, ['reports-view']);

        foreach ($this->exportRoutes() as $name => $route) {
            $response = $route['method'] === 'get'
                ? $this->get(route($route['route'], $route['params']))
                : $this->post(route($route['route'], $route['params']));

            $response->assertForbidden("Export route '{$name}' should be forbidden without reports-export");
        }
    }

    public function test_export_routes_deny_user_without_any_report_permission(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school, []);

        foreach ($this->exportRoutes() as $name => $route) {
            $response = $route['method'] === 'get'
                ? $this->get(route($route['route'], $route['params']))
                : $this->post(route($route['route'], $route['params']));

            $response->assertForbidden("Export route '{$name}' should be forbidden without any report permission");
        }
    }

    public function test_export_students_accessible_with_both_permissions(): void
    {
        $school = $this->school();
        $adminId = $this->actingAsReportUser($school, ['reports-view', 'reports-export'])->id;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        $year = $this->activeAcademicYear($school);
        Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $this->mockPdfExport()->shouldReceive('printPdf')->andReturn(response('mock-pdf'))->once()->andReturn(response('mock-pdf'));

        $this->get(route('report.export-student'))->assertOk();
    }

    public function test_reports_manage_grants_both_view_and_export(): void
    {
        $school = $this->school();
        $adminId = $this->actingAsReportUser($school, ['reports-manage'])->id;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        $year = $this->activeAcademicYear($school);
        Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $this->mockPdfExport()->shouldReceive('printPdf')->andReturn(response('mock-pdf'))->once()->andReturn(response('mock-pdf'));

        $this->get(route('report.index'))->assertOk();
        $this->get(route('report.export-student'))->assertOk();
    }

    public function test_reports_view_does_not_grant_export(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school, ['reports-view']);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->get(route('report.index'))->assertOk();
        $this->get(route('report.export-student'))->assertForbidden();
    }
}
