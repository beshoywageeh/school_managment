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
    public function getUserRoleCounts(int $userId, int $schoolId, bool $isAdmin): array
    {
        if ($isAdmin) {
            $students = Student::where('school_id', $schoolId)->count();
            $parents = MyParent::where('school_id', $schoolId)->count();
        } else {
            $gradeIds = User::find($userId)->grades()->pluck('grade_id');

            $students = Student::where('school_id', $schoolId)
                ->whereIn('grade_id', $gradeIds)
                ->count();

            $parents = MyParent::where('school_id', $schoolId)
                ->whereIn('student_id', $gradeIds)
                ->count();
        }

        return [$students, $parents];
    }

    public function getFinancialData(int $schoolId): array
    {
        return [
            'credit' => StudentAccount::where('type', 'invoice')->sum('debit'),
            'payment_parts' => PaymentParts::where('school_id', $schoolId)
                ->where('status', 'paid')
                ->sum('amount'),
            'payments' => ReceiptPayment::where('school_id', $schoolId)->sum('Debit'),
            'totalInvoiced' => FeeInvoice::where('school_id', $schoolId)
                ->whereNull('deleted_at')
                ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
                ->sum('school__fees.amount'),
            'totalPaid' => ReceiptPayment::where('school_id', $schoolId)->sum('Debit'),
        ];
    }

    public function getRecentActivity(int $schoolId): Collection
    {
        $recentStudents = Student::where('school_id', $schoolId)
            ->latest()->take(2)->get()->map(fn ($s) => [
                'icon' => 'graduation-cap',
                'description' => __('general.dashboard.student_created').': '.$s->name,
                'time' => $s->created_at->diffForHumans(),
            ]);
        $recentPayments = ReceiptPayment::where('school_id', $schoolId)
            ->latest()->take(3)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
                'time' => $p->created_at->diffForHumans(),
            ]);

        return $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();
    }

    public function getGradesWithClassrooms(int $schoolId)
    {
        return Grade::where('school_id', $schoolId)
            ->with(['class_rooms' => function ($query) {
                $query->withCount('students');
            }])
            ->get();
    }

    public function getEmployeeCount(int $schoolId): int
    {
        return User::where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();
    }
}
