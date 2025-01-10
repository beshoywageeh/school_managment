<?php

namespace App\Http\Traits;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    public function logActivity($action, $description = null)
    {
        $user = Auth::user();
        ActivityLog::create([
            'user_id' => $user->id,
            'action' => $action,
            'description' => $description,
            'ip' => request()->ip(),
            'setting_id' => $user->school_id,
        ]);
    }
}
