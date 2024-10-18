<?php

namespace App\Http\Traits;

use App\Models\ActivityLog;

trait LogsActivity
{
    public function logActivity($action, $description = null)
    {
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => $action,
            'description' => $description,
            'ip' => request()->ip(),
        ]);
    }
}