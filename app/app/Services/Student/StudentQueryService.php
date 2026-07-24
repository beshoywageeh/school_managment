<?php

namespace App\Services\Student;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentQueryService
{
    public function getFilteredQuery(Request $request, int $schoolId): LengthAwarePaginator
    {
        $query = Student::query()
            ->join('parents', 'students.parent_id', '=', 'parents.id')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('class_rooms', 'students.classroom_id', '=', 'class_rooms.id')
            ->where('students.school_id', $schoolId)
            ->whereNull('students.deleted_at')
            ->withSum('fee_invoice', 'amount')
            ->select([
                'students.*',
                'parents.father_name as parent_name',
                'grades.name as grade_name',
                'class_rooms.name as classroom_name',
            ]);

        $this->applyFilters($query, $request);
        $this->applySorts($query, $request);

        return $query->paginate(config('school.per_page'));
    }

    public function applyFilters(Builder $query, Request $request): void
    {
        if ($request->filled('students')) {
            $search = '%'.$request->students.'%';
            $query->where(function ($q) use ($search) {
                $q->where('students.name', 'like', $search)
                    ->orWhere('parents.father_name', 'like', $search)
                    ->orWhere('students.address', 'like', $search);
            });
        }

        if ($request->filled('grade_id')) {
            $query->where('students.grade_id', $request->grade_id);
        }

        if ($request->filled('classroom_id')) {
            $query->where('students.classroom_id', $request->classroom_id);
        }

        if ($request->filled('birth_date_filter')) {
            $query->whereDate('students.birth_date', '>=', Carbon::parse($request->birth_date_filter));
        }

        if ($request->filled('joinDateTo')) {
            $query->whereDate('students.join_date', '<=', Carbon::parse($request->joinDateTo));
        }

        if (! Auth::user()->hasRole('Admin')) {
            $gradeIds = DB::table('teacher_grade')
                ->where('teacher_id', Auth::id())
                ->pluck('grade_id');
            $query->whereIn('students.grade_id', $gradeIds);
        }
    }

    public function applySorts(Builder $query, Request $request): void
    {
        $sortBy = $request->get('sort_by', 'students.id');
        $sortOrder = $request->get('sort_order', 'desc');

        $sortMap = [
            'name' => 'students.name',
            'grade_name' => 'grades.name',
        ];

        $actualSortField = $sortMap[$sortBy] ?? $sortBy;
        $query->orderBy($actualSortField, $sortOrder);
    }
}
