<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    use SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:settings-info', ['only' => ['index']]);
    }

    public function index(Request $request)
    {
        $school = $this->getSchool();

        if (! $school) {
            abort(403, 'Unauthorized');
        }

        $query = ActivityLog::with('user')->where('school_id', $school->id);

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('action')) {
            $escapedAction = str_replace(['%', '_'], ['\\%', '\\_'], $request->action);
            $query->where('action', 'like', "%{$escapedAction}%");
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $data['total'] = (clone $query)->count();
        $data['today'] = (clone $query)->whereDate('created_at', today())->count();

        $activities = $query->paginate(20);

        $users = User::where('school_id', $school->id)->get();

        return view(
            'backend.system_monitor.Index',
            compact('activities', 'school', 'users', 'data'),
        );
    }
}
