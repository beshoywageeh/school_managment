<?php

namespace App\Http\Traits;

use App\Jobs\LogActivityJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait LogsActivity
{
    protected bool $logActivityAsync = true;

    public function logActivity($action, $description = null, ?string $modelType = null, ?int $modelId = null): void
    {
        $user = Auth::user();

        if (! $user) {
            return;
        }

        $data = [
            'user_id' => $user->id,
            'action' => $action,
            'description' => $description,
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'school_id' => $user->school_id ?? null,
            'model_type' => $modelType,
            'model_id' => $modelId,
        ];

        if ($this->logActivityAsync && app()->bound('queue')) {
            LogActivityJob::dispatch(
                $data['user_id'],
                $data['action'],
                $data['description'],
                $data['ip'],
                $data['user_agent'],
                $data['school_id'],
                $data['model_type'],
                $data['model_id']
            )->onQueue('logs');
        } else {
            \App\Models\ActivityLog::create($data);
        }
    }

    public function logActivitySync($action, $description = null, ?string $modelType = null, ?int $modelId = null): void
    {
        $previousMode = $this->logActivityAsync;
        $this->logActivityAsync = false;
        $this->logActivity($action, $description, $modelType, $modelId);
        $this->logActivityAsync = $previousMode;
    }

    public function logCreated($model, ?string $description = null): void
    {
        $action = trans('log.actions.added');
        $modelClass = is_object($model) ? get_class($model) : $model;
        $basename = Str::afterLast($modelClass, '\\');
        $description = $description ?? trans('log.models.'.Str::snake($basename).'.created', ['name' => $this->getModelName($model)]);

        $this->logActivity($action, $description, $modelClass, is_object($model) ? ($model->id ?? null) : null);
    }

    public function logUpdated($model, ?string $description = null): void
    {
        $action = trans('log.actions.updated');
        $modelClass = is_object($model) ? get_class($model) : $model;
        $basename = Str::afterLast($modelClass, '\\');
        $description = $description ?? trans('log.models.'.Str::snake($basename).'.updated', ['name' => $this->getModelName($model)]);

        $this->logActivity($action, $description, $modelClass, is_object($model) ? ($model->id ?? null) : null);
    }

    public function logDeleted($model, ?string $description = null): void
    {
        $action = trans('log.actions.deleted');
        $modelClass = is_object($model) ? get_class($model) : $model;
        $basename = Str::afterLast($modelClass, '\\');
        $description = $description ?? trans('log.models.'.Str::snake($basename).'.deleted', ['name' => $this->getModelName($model)]);

        $this->logActivity($action, $description, $modelClass, is_object($model) ? ($model->id ?? null) : null);
    }

    public function logRestored($model, ?string $description = null): void
    {
        $action = trans('log.actions.restored');
        $modelClass = is_object($model) ? get_class($model) : $model;
        $basename = Str::afterLast($modelClass, '\\');
        $description = $description ?? trans('log.models.'.Str::snake($basename).'.restored', ['name' => $this->getModelName($model)]);

        $this->logActivity($action, $description, $modelClass, is_object($model) ? ($model->id ?? null) : null);
    }

    protected function getModelName($model): string
    {
        if (is_array($model)) {
            return json_encode($model);
        }

        if (is_object($model)) {
            return $model->name ?? $model->title ?? $model->id ?? class_basename($model);
        }

        return (string) $model;
    }
}
