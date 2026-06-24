<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    use SchoolTrait;

    public function index(Request $request)
    {
        $school = $this->getSchool();
        $query = ActivityLog::with('user');

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('action')) {
            $query->where('action', 'like', "%{$request->action}%");
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }
        $data['total'] = $query->count();
        $data['today'] = $query->whereDate('created_at', Today());

        $activities = $query->paginate(20);

        $users = User::where('school_id', $school->id)->get();

        return view(
            'backend.system_monitor.Index',
            compact('activities', 'school', 'users', 'data'),
        );
    }
}
