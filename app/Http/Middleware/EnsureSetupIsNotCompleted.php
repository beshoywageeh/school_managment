<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnsureSetupIsNotCompleted
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->isSetupCompleted()) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }

    protected function isSetupCompleted()
    {
        try {
            DB::connection()->getPdo();

            return DB::table('users')->exists(); // مثال: تحقق من وجود مستخدمين
        } catch (\Exception $e) {
            return false;
        }
    }
}
