<?php

namespace App\Http\Controllers;

use App\Models\SystemLogs;
use Illuminate\Http\Request;

class MonitorSystemController extends Controller
{
    public function __invoke()
    {
        $sys_logs = SystemLogs::with('users')->get();

        // return $sys_logs;
        $system_Logs = $sys_logs->map(function ($sys_log) {
            return [
                'action' => $sys_log->action,
                'model' => $sys_log->user_id,
                'createdAt' => $sys_log->created_at->format('d-m-Y | g:i:s A'),
                'created_by' => $sys_log->users->first_name,
                'ip' => $sys_log->ip,
                'data' => is_null($sys_log->data) ? '-' : $sys_log->data,
            ];
        })->map(function ($sys_log) {
            return [
                'action' => $sys_log['action'],
                'model' => $sys_log['model'],
                'createdAt' => $sys_log['createdAt'],
                'created_by' => $sys_log['created_by'],
                'ip' => $sys_log['ip'],
                'data' => is_array($sys_log['data']) ? array_map(function ($data) {
                    return [
                        'name' => $data['name'],
                    ];
                }, $sys_log['data']) : '-',
            ];
        });
        return $system_Logs;
        return view('backend.system_monitor.Index', get_defined_vars());
    }
}
