<?php

namespace App\Models\Traits;

use App\Models\Scopes\SchoolScope;

trait BelongsToSchool
{
    protected static function bootBelongsToSchool(): void
    {
        static::addGlobalScope(new SchoolScope);

        // يضمن إن أي إنشاء جديد ياخد school_id تلقائي من اليوزر الحالي
        static::creating(function ($model) {
            if (empty($model->school_id) && auth()->check()) {
                $model->school_id = auth()->user()->school_id;
            }
        });
    }
}
