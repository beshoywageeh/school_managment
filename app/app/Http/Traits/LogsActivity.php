<?php

namespace App\Http\Traits;

use App\Jobs\LogActivityJob;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    protected bool $logActivityAsync = true;

    public function logActivity(
        $action,
        $description = null,
        ?string $modelType = null,
        ?int $modelId = null,
    ): void {
        $user = Auth::user();

        if (! $user) {
            return;
        }

        $data = [
            'user_id' => $user->id,
            'action' => $action,
            'description' => $description,
            'ip' => request()->ip() ??
                (request()->server('REMOTE_ADDR') ?? '127.0.0.1'),
            'user_agent' => request()->userAgent() ?? 'CLI',
            'school_id' => $user->school_id ?? null,
            'model_type' => $modelType,
            'model_id' => $modelId,
        ];

        LogActivityJob::dispatch(
            $data['user_id'],
            $data['action'],
            $data['description'],
            $data['ip'],
            $data['user_agent'],
            $data['school_id'],
            $data['model_type'],
            $data['model_id'],
        )->onQueue('logs');
    }

    public function logActivitySync(
        $action,
        $description = null,
        ?string $modelType = null,
        ?int $modelId = null,
    ): void {
        $previousMode = $this->logActivityAsync;
        $this->logActivityAsync = false;
        $this->logActivity($action, $description, $modelType, $modelId);
        $this->logActivityAsync = $previousMode;
    }

    protected function getModelName($model): string
    {
        if (is_array($model)) {
            return json_encode($model);
        }

        if (is_object($model)) {
            return $model->name ??
                ($model->title ?? ($model->id ?? class_basename($model)));
        }

        return (string) $model;
    }
}
