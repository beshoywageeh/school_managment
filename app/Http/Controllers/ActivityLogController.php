<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    use SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $activities = ActivityLog::where('setting_id', $school->id)->with('user')->latest()->paginate('20');

        return view('backend.system_monitor.index', compact('activities', 'school'));
    }
}
