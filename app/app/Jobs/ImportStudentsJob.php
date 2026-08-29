<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportStudentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $students;

    protected $schoolId;

    public function __construct(array $students, ?int $schoolId = null)
    {
        $this->students = $students;
        $this->schoolId = $schoolId;
    }

    public function handle(): void
    {
        $rows = collect($this->students)
            ->map(function (array $row): array {
                if ($this->schoolId !== null) {
                    $row['school_id'] = $this->schoolId;
                }

                return $row;
            })
            ->filter(fn (array $row): bool => ! empty($row['school_id']))
            ->all();

        if (empty($rows)) {
            return;
        }

        try {
            DB::table('students')->insert($rows);
        } catch (QueryException $e) {
            Log::error('Error inserting students batch: '.$e->getMessage());
            throw new \Exception('Failed to insert students: '.$e->getMessage());
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('ImportStudentsJob failed permanently: '.$exception->getMessage());

        $batchCount = count($this->students);
        Log::warning("A batch of {$batchCount} students failed to import. Manual intervention required.");
    }
}
