<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminIpWhitelist
{
    public function handle(Request $request, Closure $next): Response
    {
        $allowedIps = config('settings.admin_whitelist_ips', []);

        if (empty($allowedIps)) {
            return $next($request);
        }

        $clientIp = $request->ip();

        if (! in_array($clientIp, $allowedIps)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Access denied from your IP address.',
                ], 403);
            }

            abort(403, 'Access denied from your IP address.');
        }

        return $next($request);
    }
}
