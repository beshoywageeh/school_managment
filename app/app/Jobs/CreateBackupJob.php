<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class CreateBackupJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 300;

    public function handle(): string
    {
        Artisan::call('backup:run', ['--only-db' => 'true']);
        $output = Artisan::output();

        Log::info("CreateBackupJob -- backup completed\r\n".$output);

        return $output;
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('CreateBackupJob failed: '.$exception->getMessage());
    }
}
