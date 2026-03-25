<?php

namespace App\Jobs;

use App\Models\ActivityLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LogActivityJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $userId;

    public string $action;

    public ?string $description;

    public ?string $ip;

    public ?string $userAgent;

    public ?int $schoolId;

    public ?string $modelType;

    public ?int $modelId;

    public function __construct(
        int $userId,
        string $action,
        ?string $description = null,
        ?string $ip = null,
        ?string $userAgent = null,
        ?int $schoolId = null,
        ?string $modelType = null,
        ?int $modelId = null
    ) {
        $this->userId = $userId;
        $this->action = $action;
        $this->description = $description;
        $this->ip = $ip;
        $this->userAgent = $userAgent;
        $this->schoolId = $schoolId;
        $this->modelType = $modelType;
        $this->modelId = $modelId;
    }

    public function handle(): void
    {
        ActivityLog::create([
            'user_id' => $this->userId,
            'action' => $this->action,
            'description' => $this->description,
            'ip' => $this->ip,
            'user_agent' => $this->userAgent,
            'setting_id' => $this->schoolId,
            'model_type' => $this->modelType,
            'model_id' => $this->modelId,
        ]);
    }

    public function failed(\Throwable $exception): void
    {
        \Log::error('Activity logging failed: '.$exception->getMessage());
    }
}
