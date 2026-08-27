<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SchoolScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * Isolation decision (single source of truth for school scoping):
     * - Unauthenticated requests (console, queue, tinker) are not scoped.
     * - Admin users (isAdmin = true) intentionally see every school.
     * - Authenticated non-admin users with a school_id are filtered to that
     *   school on BOTH read (here) and write (see BelongsToSchool::boot()).
     * - Authenticated non-admin users with a NULL school_id are treated as
     *   super-admin: the filter is skipped and a warning is logged. This is a
     *   deliberate escape hatch, not a data leak — such accounts should be
     *   reserved for the platform owner and never reused for school staff.
     */
    public function apply(Builder $builder, Model $model)
    {
        if (! Auth::hasUser()) {
            return;
        }

        $user = Auth::user();

        if ($user->isAdmin == true) {
            return;
        }

        if (! $user->school_id) {
            Log::warning("SchoolScope: skipping filter for user {$user->id} — school_id is null (admin/super-admin context)");

            return;
        }

        $builder->where($model->getTable().'.school_id', $user->school_id);
    }
}
