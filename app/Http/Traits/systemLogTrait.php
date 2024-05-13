<?php

namespace App\Http\Traits;
use App\Models\SystemLogs;
use Illuminate\Http\Request;
trait systemLogTrait
{
    public function syslog($action = null, $model_name = null, $model_id = null, array $data = [], $ip = null)
    {
        $route = \Route::currentRouteAction();
        $arr = explode('@', $route);

        SystemLogs::create([
            'user_id' => \Auth::user()->id,
            'action' => $arr[1],
            'model' => $model_name,
            'model_id' => $model_id,
            'data' => (is_null($data)) ? '-' : $data,
            'ip' => $ip
        ]);
        return null;
    }
}