<?php

namespace App\Services;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class ActivityLogService
{
    public function log(string $action, string $description, ?int $userId = null): ActivityLog
    {
        return ActivityLog::create([
            'user_id' => $userId ?? Auth::id(),
            'action' => $action,
            'description' => $description,
        ]);
    }

    public function logStudentCreated(string $studentName): ActivityLog
    {
        return $this->log('created', trans('log.models.student.created', ['student_name' => $studentName]));
    }

    public function logStudentUpdated(string $studentName): ActivityLog
    {
        return $this->log('updated', trans('log.models.student.updated', ['student_name' => $studentName]));
    }

    public function logStudentDeleted(string $studentName): ActivityLog
    {
        return $this->log('deleted', trans('log.models.student.deleted', ['student_name' => $studentName]));
    }

    public function logFeePayment(string $studentName, float $amount): ActivityLog
    {
        return $this->log('created', trans('log.models.payment.created', ['name' => $studentName, 'amount' => $amount]));
    }

    public function logFeeInvoiceCreated(string $studentName, float $amount): ActivityLog
    {
        return $this->log('added', trans('log.models.school_fee.invoice_added', ['name' => $studentName, 'amount' => $amount]));
    }

    public function getRecentLogs(int $limit = 50): \Illuminate\Database\Eloquent\Collection
    {
        return ActivityLog::latest()
            ->limit($limit)
            ->get();
    }

    public function getLogsByUser(int $userId, int $limit = 50): \Illuminate\Database\Eloquent\Collection
    {
        return ActivityLog::where('user_id', $userId)
            ->latest()
            ->limit($limit)
            ->get();
    }
}
