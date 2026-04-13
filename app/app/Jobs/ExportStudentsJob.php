<?php

namespace App\Jobs;

use App\Exports\StudentsExport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Excel;

class ExportStudentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 600;

    public function __construct(
        public int $schoolId,
        public int $academicYearId,
        public int $userId,
        public string $format = 'xlsx',
        public array $filters = []
    ) {
        $this->onQueue('exports');
    }

    public function handle(Excel $excel): void
    {
        try {
            $filename = $this->generateFilename();
            $export = new StudentsExport(
                $this->schoolId,
                $this->academicYearId,
                $this->filters
            );

            $path = "exports/{$filename}";
            $excel->store($export, $path, 'local');
            Log::info("Export completed: {$path} by user {$this->userId}");

            $this->notifyUser();
        } catch (\Exception $e) {
            Log::error('ExportStudentsJob failed: '.$e->getMessage());
            throw $e;
        }
    }

    protected function generateFilename(): string
    {
        $timestamp = now()->format('Y-m-d_His');

        return "students_export_{$timestamp}.{$this->format}";
    }

    protected function notifyUser(): void
    {
        // Could integrate with notifications here
        // User::find($this->userId)->notify(new ExportReady($filename));
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('ExportStudentsJob failed: '.$exception->getMessage());
    }
}
