<?php

namespace App\Services;

use App\Models\FeeInvoice;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class InvoiceQueryService
{
    public function getFilteredQuery(Request $request, int $schoolId): LengthAwarePaginator
    {
        $query = FeeInvoice::query()
            ->where('school_id', $schoolId)
            ->with([
                'student:id,name',
                'grade:id,name',
                'classroom:id,name',
                'acd_year:id,view',
            ])
            ->withSum('schoolFee', 'amount');

        $this->applyDynamicFilters($query, $request);

        $sortBy = $request->get('sort_by', 'id');
        $sortOrder = $request->get('sort_order', 'desc');

        if (! str_contains($sortBy, '.')) {
            $query->orderBy($sortBy, $sortOrder);
        }

        return $query->paginate(config('school.per_page'));
    }

    public function applyDynamicFilters($query, Request $request): void
    {
        if ($request->filled('students')) {
            $query->whereHas('student', function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->students.'%');
            });
        }

        if ($request->filled('grade_id')) {
            $query->where('grade_id', $request->grade_id);
        }
    }
}
