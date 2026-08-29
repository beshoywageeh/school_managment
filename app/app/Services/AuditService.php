<?php

namespace App\Services;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Synchronous, append-only audit logging for privileged actions.
 *
 * Unlike the asynchronous LogsActivity trait, this service writes audit
 * entries immediately so tests and callers can assert them deterministically.
 * It is append-only for the acting user: entries are only created, never
 * updated or deleted by this service.
 */
class AuditService
{
    /**
     * Record an audit entry for the privileged action taken by the actor.
     */
    public function record(
        string $action,
        string $description,
        ?User $actor = null,
        ?string $modelType = null,
        ?int $modelId = null,
    ): ActivityLog {
        $actor = $actor ?? Auth::user();

        return ActivityLog::query()->create([
            'user_id' => $actor?->id,
            'school_id' => $actor?->school_id,
            'action' => $action,
            'description' => $description,
            'ip' => request()->ip() ?? (request()->server('REMOTE_ADDR') ?? '127.0.0.1'),
            'user_agent' => request()->userAgent() ?? 'CLI',
            'model_type' => $modelType,
            'model_id' => $modelId,
        ]);
    }

    /**
     * Record a login/authentication-related event (used for auth throttling).
     */
    public function recordAuth(string $action, string $description, ?User $actor = null): ActivityLog
    {
        return $this->record($action, $description, $actor, null, null);
    }
}
