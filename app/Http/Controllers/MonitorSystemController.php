<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;

class MonitorSystemController extends Controller
{
    public function __invoke()
    {
        $system_logs = Activity::where('causer_id', auth()->id())->get();
        //return $system_logs;
        return view('backend.system_monitor.Index', get_defined_vars());
    }
}
