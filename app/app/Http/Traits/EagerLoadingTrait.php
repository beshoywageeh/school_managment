<?php

namespace App\Http\Traits;

trait EagerLoadingTrait
{
    protected array $eagerLoadRelations = [];

    protected function withStudentRelations(): array
    {
        return [
            'grade:id,name,school_id',
            'class_room:id,name,grade_id',
            'parent:id,Father_Name',
            'nationality:id,name',
            'user:id,name',
        ];
    }

    protected function withGradeRelations(): array
    {
        return [
            'user:id,name',
            'class_rooms:id,name,grade_id',
        ];
    }

    protected function withClassRoomRelations(): array
    {
        return [
            'grade:id,name,school_id',
            'user:id,name',
        ];
    }

    protected function withFeeInvoiceRelations(): array
    {
        return [
            'students:id,name',
            'fees:id,title,amount',
            'grades:id,name',
            'classes:id,name',
            'acd_year:id,view',
        ];
    }

    protected function withUserRelations(): array
    {
        return [
            'job:id,name',
            'image',
        ];
    }

    protected function withParentRelations(): array
    {
        return [
            'students',
        ];
    }

    protected function withPromotionRelations(): array
    {
        return [
            'students:id,name',
            'f_grade:id,name',
            'f_class:id,name',
            't_grade:id,name',
            't_class:id,name',
            't_acc:id,view',
            'f_acc:id,view',
        ];
    }

    protected function applyEagerLoading($query, array $relations): \Illuminate\Database\Eloquent\Builder
    {
        return $query->with($relations);
    }

    protected function withCountEagerLoading($query, array $counts): \Illuminate\Database\Eloquent\Builder
    {
        return $query->withCount($counts);
    }
}
