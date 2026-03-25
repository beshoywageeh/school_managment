<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportStudentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function handle(): void
    {
        try {
            DB::table('students')->insert($this->students);
        } catch (\Illuminate\Database\QueryException $e) {
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
