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
