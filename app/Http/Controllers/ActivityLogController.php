<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::with('user')->latest()->paginate('20');

        return view('backend.system_monitor.index', compact('activities'));
    }
}
