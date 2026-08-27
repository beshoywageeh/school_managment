<?php

namespace App\Services;

use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use Illuminate\Support\Collection;

class DashboardService
{
    public function getUserRoleCounts(int $userId, ?int $schoolId = null, bool $isAdmin = false): array
    {
        $schoolId !== null
            ? $students = Student::where('school_id', $schoolId)
            : $students = Student::query();

        $schoolId !== null
            ? $parents = MyParent::where('school_id', $schoolId)
            : $parents = MyParent::query();

        if (! $isAdmin) {
            $gradeIds = User::find($userId)->grades()->pluck('grade_id');

            $students->whereIn('grade_id', $gradeIds);
            $parents->whereIn('student_id', $gradeIds);
        }

        return [$students->count(), $parents->count()];
    }

    public function getFinancialData(?int $schoolId = null): array
    {
        $schoolId !== null
            ? $paymentParts = PaymentParts::where('school_id', $schoolId)
            : $paymentParts = PaymentParts::query();

        $schoolId !== null
            ? $receiptPayments = ReceiptPayment::where('school_id', $schoolId)
            : $receiptPayments = ReceiptPayment::query();

        $schoolId !== null
            ? $feeInvoices = FeeInvoice::where('fee_invoices.school_id', $schoolId)
            : $feeInvoices = FeeInvoice::query();

        $schoolId !== null
            ? $studentAccountCredit = StudentAccount::where('school_id', $schoolId)->where('type', 'invoice')
            : $studentAccountCredit = StudentAccount::where('type', 'invoice');

        return [
            'credit' => (clone $studentAccountCredit)->sum('debit'),
            'payment_parts' => (clone $paymentParts)
                ->where('status', 'paid')
                ->sum('amount'),
            'payments' => (clone $receiptPayments)->sum('Debit'),
            'totalInvoiced' => (clone $feeInvoices)
                ->whereNull('fee_invoices.deleted_at')
                ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
                ->sum('school__fees.amount'),
            'totalPaid' => (clone $receiptPayments)->sum('Debit'),
        ];
    }

    public function getRecentActivity(?int $schoolId = null): Collection
    {
        $schoolId !== null
            ? $students = Student::where('school_id', $schoolId)
            : $students = Student::query();

        $schoolId !== null
            ? $receiptPayments = ReceiptPayment::where('school_id', $schoolId)
            : $receiptPayments = ReceiptPayment::query();

        $recentStudents = $students->latest()->take(2)->get()->map(fn ($s) => [
            'icon' => 'graduation-cap',
            'description' => __('general.dashboard.student_created').': '.$s->name,
            'time' => $s->created_at->diffForHumans(),
        ]);
        $recentPayments = $receiptPayments->latest()->take(3)->get()->map(fn ($p) => [
            'icon' => 'credit-card',
            'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
            'time' => $p->created_at->diffForHumans(),
        ]);

        return $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();
    }

    public function getGradesWithClassrooms(?int $schoolId = null)
    {
        $schoolId !== null
            ? $grades = Grade::where('school_id', $schoolId)
            : $grades = Grade::query();

        return $grades
            ->with(['class_rooms' => function ($query) {
                $query->withCount('students');
            }])
            ->get();
    }

    public function getEmployeeCount(?int $schoolId = null): int
    {
        $schoolId !== null
            ? $users = User::where('school_id', $schoolId)
            : $users = User::query();

        return $users
            ->where('code', '!=', '000001')
            ->count();
    }
}
