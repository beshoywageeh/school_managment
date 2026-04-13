<?php

namespace App\Services;

use App\Models\class_room;
use App\Models\Grade;
use App\Models\nationality;
use App\Models\school_fee;
use Illuminate\Support\Facades\Cache;

class CacheService
{
    protected int $schoolId;

    protected int $cacheTtl = 86400;

    public function setSchool(int $schoolId): self
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    public function getGradesWithCache(): \Illuminate\Database\Eloquent\Collection
    {
        $cacheKey = "grades_list_{$this->schoolId}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () {
            return Grade::where('school_id', $this->schoolId)
                ->orderBy('name')
                ->get(['id', 'name', 'school_id']);
        });
    }

    public function getClassRoomsWithCache(?int $gradeId = null): \Illuminate\Database\Eloquent\Collection
    {
        $cacheKey = $gradeId
            ? "classrooms_grade_{$gradeId}"
            : "classrooms_all_{$this->schoolId}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () use ($gradeId) {
            $query = class_room::query();

            if ($gradeId) {
                $query->where('grade_id', $gradeId);
            } else {
                $query->where('school_id', $this->schoolId);
            }

            return $query->orderBy('name')->get(['id', 'name', 'grade_id']);
        });
    }

    public function getSchoolFeesWithCache(?int $gradeId = null, ?int $classroomId = null): \Illuminate\Database\Eloquent\Collection
    {
        $cacheKey = "fees_{$this->schoolId}_{$gradeId}_{$classroomId}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () use ($gradeId, $classroomId) {
            $query = school_fee::where('school_id', $this->schoolId);

            if ($gradeId) {
                $query->where('grade_id', $gradeId);
            }

            if ($classroomId) {
                $query->where('classroom_id', $classroomId);
            }

            return $query->orderBy('title')->get(['id', 'title', 'amount', 'grade_id', 'classroom_id']);
        });
    }

    public function getNationalitiesWithCache(): \Illuminate\Database\Eloquent\Collection
    {
        $cacheKey = "nationalities_{$this->schoolId}";

        return Cache::remember($cacheKey, $this->cacheTtl, function () {
            return nationality::orderBy('name')->get(['id', 'name']);
        });
    }

    public function invalidateGradesCache(): void
    {
        Cache::forget("grades_list_{$this->schoolId}");
        Cache::forget("classrooms_all_{$this->schoolId}");
    }

    public function invalidateClassRoomsCache(int $gradeId): void
    {
        Cache::forget("classrooms_grade_{$gradeId}");
        Cache::forget("classrooms_all_{$this->schoolId}");
    }

    public function invalidateFeesCache(): void
    {
        Cache::forget("fees_{$this->schoolId}");
    }

    public function invalidateAllCache(): void
    {
        $this->invalidateGradesCache();
        $this->invalidateFeesCache();
    }
}
