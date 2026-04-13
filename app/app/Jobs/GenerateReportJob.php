<?php

namespace App\Jobs;

use App\Models\Fee_invoice;
use App\Models\Recipt_Payment;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GenerateReportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 300;

    public function __construct(
        public int $schoolId,
        public int $academicYearId,
        public string $reportType,
        public int $userId,
        public array $filters = []
    ) {
        $this->onQueue('reports');
    }

    public function handle(): void
    {
        try {
            $data = match ($this->reportType) {
                'students' => $this->generateStudentsReport(),
                'fees' => $this->generateFeesReport(),
                'payments' => $this->generatePaymentsReport(),
                default => null,
            };

            if ($data) {
                $filename = "reports/{$this->reportType}_".date('Y-m-d_His').'.json';
                Storage::put($filename, json_encode($data));
                Log::info("Report generated: {$filename} by user {$this->userId}");
            }
        } catch (\Exception $e) {
            Log::error('Failed to generate report: '.$e->getMessage());
            throw $e;
        }
    }

    protected function generateStudentsReport(): array
    {
        $query = Student::where('school_id', $this->schoolId)
            ->where('acadmiecyear_id', $this->academicYearId);

        if (! empty($this->filters['grade_id'])) {
            $query->where('grade_id', $this->filters['grade_id']);
        }

        if (! empty($this->filters['classroom_id'])) {
            $query->where('classroom_id', $this->filters['classroom_id']);
        }

        return $query->with(['grade:id,name', 'class_room:id,name', 'parent:id,Father_Name'])
            ->get()
            ->toArray();
    }

    protected function generateFeesReport(): array
    {
        $query = Fee_invoice::where('school_id', $this->schoolId)
            ->where('academic_year_id', $this->academicYearId);

        if (! empty($this->filters['grade_id'])) {
            $query->where('grade_id', $this->filters['grade_id']);
        }

        return $query->with(['students:id,name', 'fees:id,title,amount'])
            ->get()
            ->toArray();
    }

    protected function generatePaymentsReport(): array
    {
        $query = Recipt_Payment::where('school_id', $this->schoolId)
            ->where('academic_year_id', $this->academicYearId);

        return $query->with(['student:id,name'])
            ->get()
            ->toArray();
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('GenerateReportJob failed: '.$exception->getMessage());
    }
}
