<?php

namespace App\Http\Traits;

use App\Models\School;
use Illuminate\Support\Facades\Auth;

trait SchoolTrait
{
    public function getSchool(?int $schoolId = null): ?School
    {
        $schoolId = $schoolId ?? Auth::user()?->school_id;

        if (! $schoolId) {
            return null;
        }

        return School::with('image')->find($schoolId);
    }

    public function schoolId(): ?int
    {
        $user = Auth::user();

        if ($user->isAdmin) {
            return null;
        }

        return $user->school_id;
    }
}
