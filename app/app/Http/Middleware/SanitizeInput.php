<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SanitizeInput
{
    protected array $stripTagsFields = [
        'name',
        'address',
        'notes',
        'description',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $this->sanitize($request);

        return $next($request);
    }

    protected function sanitize(Request $request): void
    {
        foreach ($this->stripTagsFields as $field) {
            if ($request->has($field)) {
                $value = $request->input($field);

                if (is_string($value)) {
                    $request->merge([
                        $field => strip_tags($value, '<p><br><strong><em><ul><ol><li>'),
                    ]);
                }
            }
        }

        if ($request->has('national_id')) {
            $nationalId = $request->input('national_id');
            if (is_string($nationalId)) {
                $request->merge([
                    'national_id' => preg_replace('/[^0-9]/', '', $nationalId),
                ]);
            }
        }

        if ($request->has('phone')) {
            $phone = $request->input('phone');
            if (is_string($phone)) {
                $request->merge([
                    'phone' => preg_replace('/[^0-9]/', '', $phone),
                ]);
            }
        }
    }
}
