# Implementation Plan: Schedule Enhancement

## Technical Context

- **Framework:** Laravel 10 + Livewire v4
- **PHP:** 8.5
- **Frontend:** Tailwind CSS v4, Alpine.js v3
- **Testing:** PHPUnit v10
- **Auth:** Spatie Permissions (existing `scheduale-list` permission)
- **Print pattern:** Standalone Blade views with inline CSS (follows `exchange_bond/print.blade.php` pattern)

## Constitution Check

No constitution file exists. Proceeding with standard Laravel conventions from AGENTS.md.

## Files to Modify/Create

| # | File | Action | Purpose |
|---|------|--------|---------|
| 1 | `app/Models/Grade.php` | Modify | Add `classes()` HasMany relationship |
| 2 | `app/Livewire/Schedules.php` | Modify | Rewrite `autoGenerate()`, add print properties, add grades to render |
| 3 | `app/Http/Controllers/SchedulePrintController.php` | Create | 3 print methods (teacher, classroom, grade) |
| 4 | `resources/views/backend/schedules/print/teacher.blade.php` | Create | Teacher full-week print view |
| 5 | `resources/views/backend/schedules/print/classroom.blade.php` | Create | Classroom full-week print view |
| 6 | `resources/views/backend/schedules/print/grade.blade.php` | Create | Grade full-week print view |
| 7 | `resources/views/livewire/Schedules/Schedules.blade.php` | Modify | Add print toolbar (3 dropdowns + links) |
| 8 | `routes/academic.php` | Modify | Add 3 print routes |
| 9 | `lang/en/schedules.php` | Modify | Add new translation keys |
| 10 | `lang/ar/schedules.php` | Modify | Add new translation keys |

---

## Task 1: Add `classes()` relationship to Grade model

**File:** `app/Models/Grade.php`

Add after the existing `students()` method:

```php
public function classes(): HasMany
{
    return $this->hasMany(classes::class, 'grade_id');
}
```

Add `use App\Models\classes;` import if not already present.

**Verify:** Run `php artisan tinker` → `Grade::first()->classes` should return a collection.

---

## Task 2: Rewrite `autoGenerate()` in Schedules Livewire component

**File:** `app/Livewire/Schedules.php`

Replace the current `autoGenerate()` method with the new algorithm:

```php
public function autoGenerate()
{
    $teachers = User::where('type', 1)->with('grades')->get();
    $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];

    // Pre-fetch teacher grades and classes
    $teacherGrades = [];
    foreach ($teachers as $teacher) {
        $teacherGrades[$teacher->id] = $teacher->grades->pluck('id')->toArray();
    }

    $classesByGrade = classes::all()->groupBy('grade_id');

    // Track: teacher_id => ['total' => int, 'daily' => [day => count]]
    $counts = [];
    foreach ($teachers as $teacher) {
        $counts[$teacher->id] = ['total' => 0, 'daily' => []];
        foreach ($days as $day) {
            $counts[$teacher->id]['daily'][$day] = 0;
        }
    }

    // Clear existing schedules first
    schedules_Managment::query()->delete();

    // Iterate: periods → days → teachers (ensures even day distribution)
    for ($period = 1; $period <= 8; $period++) {
        foreach ($days as $day) {
            $busyTeachers = schedules_Managment::where('day', $day)
                ->where('period', $period)
                ->pluck('user_id')
                ->toArray();

            $busyClasses = schedules_Managment::where('day', $day)
                ->where('period', $period)
                ->pluck('class_id')
                ->toArray();

            foreach ($teachers as $teacher) {
                if (in_array($teacher->id, $busyTeachers)) {
                    continue;
                }

                $maxLessons = $teacher->lesson_count ?? 24;
                $total = $counts[$teacher->id]['total'];

                if ($total >= $maxLessons) {
                    continue;
                }

                // Find available class from teacher's grades
                $possibleGradeIds = $teacherGrades[$teacher->id] ?? [];
                $targetClass = null;

                foreach ($possibleGradeIds as $gradeId) {
                    $gradeClasses = $classesByGrade->get($gradeId);
                    if ($gradeClasses) {
                        $targetClass = $gradeClasses->first(
                            fn ($c) => !in_array($c->id, $busyClasses)
                        );
                        if ($targetClass) {
                            break;
                        }
                    }
                }

                if ($targetClass) {
                    schedules_Managment::create([
                        'user_id' => $teacher->id,
                        'period' => $period,
                        'class_id' => $targetClass->id,
                        'job_id' => $teacher->job_id,
                        'day' => $day,
                    ]);
                    $busyClasses[] = $targetClass->id;
                    $busyTeachers[] = $teacher->id;
                    $counts[$teacher->id]['total']++;
                    $counts[$teacher->id]['daily'][$day]++;
                }
            }
        }
    }

    $this->logActivity(
        trans('log.actions.auto_generated'),
        trans('log.models.schedules.auto_generated')
    );
    $this->dispatch('alert');
    $this->dispatch('refresh');
    session()->flash('success', trans('general.success'));
}
```

**Key changes:**
1. Clears all existing schedules before regenerating
2. Iterates `period → day → teacher` instead of `day → period → teacher`
3. Tracks per-day counts for each teacher (enables future daily limit feature)
4. Skips teachers with no grades assigned (empty `possibleGradeIds` → no class found → skip)

**Verify:** Create test with 3 teachers (lesson_count: 6, 4, 2), 2 grades, 2 classes per grade. Run autoGenerate(). Assert:
- Each teacher gets exactly their lesson_count
- No teacher has all lessons on same day
- No conflicts

---

## Task 3: Add print properties and grades to Schedules render

**File:** `app/Livewire/Schedules.php`

Add new public properties:

```php
public $printTeacherId;
public $printClassId;
public $printGradeId;
```

Update `render()` to include grades:

```php
public function render()
{
    return view('livewire.Schedules.Schedules', [
        'Teachers' => User::where('type', 1)->with('job')->get(),
        'Schedules' => schedules_Managment::where('day', $this->selectedDay)
            ->with('class:id,title')
            ->get(),
        'classes' => classes::all(),
        'grades' => \App\Models\Grade::all(),
    ]);
}
```

---

## Task 4: Create SchedulePrintController

**File:** `app/Http/Controllers/SchedulePrintController.php`

```php
<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\classes;
use App\Models\Grade;
use App\Models\schedules;
use App\Models\User;

class SchedulePrintController extends Controller
{
    use SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:scheduale-list');
    }

    public function teacher(User $user)
    {
        $school = $this->getSchool();
        $schedules = schedules::where('user_id', $user->id)
            ->with('section:id,title')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.teacher', compact('user', 'schedules', 'school'));
    }

    public function classroom(classes $class)
    {
        $school = $this->getSchool();
        $schedules = schedules::where('class_id', $class->id)
            ->with('teacher:id,name')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.classroom', compact('class', 'schedules', 'school'));
    }

    public function grade(Grade $grade)
    {
        $school = $this->getSchool();
        $classes = $grade->classes;
        $classIds = $classes->pluck('id')->toArray();

        $schedules = schedules::whereIn('class_id', $classIds)
            ->with('teacher:id,name', 'section:id,title')
            ->get()
            ->groupBy('day');

        return view('backend.schedules.print.grade', compact('grade', 'classes', 'schedules', 'school'));
    }
}
```

---

## Task 5: Create teacher print view

**File:** `resources/views/backend/schedules/print/teacher.blade.php`

Follow the `exchange_bond/print.blade.php` pattern:
- Standalone HTML (no layout extension)
- Inline `<style>` with `@page`, `@media print` rules
- `.no-print` div with print button and close link
- RTL support (`dir="rtl"`)
- Table: periods (1-8) as rows, days (Sat-Thu) as columns
- Cells: class title from `$schedules->get($day)->where('period', $i)->first()?->section->title`

```blade
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('schedules.teacher_schedule') }} - {{ $user->name }}</title>
    <style>
        @page { size: A4 landscape; margin: 10mm; }
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background: #f0f0f0; }
        .no-print { margin-bottom: 20px; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body>
    <div class="no-print">
        <button onclick="window.print()">{{ trans('schedules.print') }}</button>
        <a href="{{ route('schedule.index') }}">{{ trans('general.back') }}</a>
    </div>
    <h2>{{ trans('schedules.teacher_schedule') }} - {{ $user->name }}</h2>
    @if($user->job)
        <p>{{ $user->job->name }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>{{ trans('schedules.period') }}</th>
                @foreach(['saturday','sunday','monday','tuesday','wednesday','thursday'] as $day)
                    <th>{{ trans("schedules.{$day}") }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 8; $i++)
                <tr>
                    <td>{{ trans("schedules.period_{$i}") }}</td>
                    @foreach(['saturday','sunday','monday','tuesday','wednesday','thursday'] as $day)
                        <td>
                            {{ $schedules->get($day, collect())->where('period', $i)->first()?->section->title ?? '-' }}
                        </td>
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>
```

---

## Task 6: Create classroom print view

**File:** `resources/views/backend/schedules/print/classroom.blade.php`

Same structure as teacher view, but:
- Header shows class title and grade name
- Cells show teacher name instead of class title

```blade
<td>
    {{ $schedules->get($day, collect())->where('period', $i)->first()?->teacher->name ?? '-' }}
</td>
```

---

## Task 7: Create grade print view

**File:** `resources/views/backend/schedules/print/grade.blade.php`

Structure:
- Header: grade name
- For each day (Sat-Thu): a separate table with periods as rows, classes as columns
- Cells: teacher name for that class at that period

```blade
@foreach(['saturday','sunday','monday','tuesday','wednesday','thursday'] as $day)
    <h3>{{ trans("schedules.{$day}") }}</h3>
    <table>
        <thead>
            <tr>
                <th>{{ trans('schedules.period') }}</th>
                @foreach($classes as $class)
                    <th>{{ $class->title }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 8; $i++)
                <tr>
                    <td>{{ trans("schedules.period_{$i}") }}</td>
                    @foreach($classes as $class)
                        <td>
                            {{ $schedules->get($day, collect())->where('period', $i)->where('class_id', $class->id)->first()?->teacher->name ?? '-' }}
                        </td>
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>
@endforeach
```

---

## Task 8: Add print toolbar to Livewire Schedules view

**File:** `resources/views/livewire/Schedules/Schedules.blade.php`

Add after the existing button row (inside the `.flex.flex-wrap.gap-2` div):

```blade
{{-- Print Teacher --}}
<select wire:model="printTeacherId" class="px-3 py-2 border border-gray-300 rounded-lg">
    <option value="">{{ trans('schedules.select_teacher') }}</option>
    @foreach($Teachers as $teacher)
        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
    @endforeach
</select>
@if($printTeacherId)
    <a href="{{ route('schedule.print.teacher', $printTeacherId) }}"
       target="_blank"
       class="px-3 py-2 bg-blue-500 text-white rounded-lg">
        {{ trans('schedules.print_teacher') }}
    </a>
@endif

{{-- Print Classroom --}}
<select wire:model="printClassId" class="px-3 py-2 border border-gray-300 rounded-lg">
    <option value="">{{ trans('schedules.select_class') }}</option>
    @foreach($classes as $class)
        <option value="{{ $class->id }}">{{ $class->title }}</option>
    @endforeach
</select>
@if($printClassId)
    <a href="{{ route('schedule.print.classroom', $printClassId) }}"
       target="_blank"
       class="px-3 py-2 bg-blue-500 text-white rounded-lg">
        {{ trans('schedules.print_classroom') }}
    </a>
@endif

{{-- Print Grade --}}
<select wire:model="printGradeId" class="px-3 py-2 border border-gray-300 rounded-lg">
    <option value="">{{ trans('schedules.select_grade') }}</option>
    @foreach($grades as $grade)
        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
    @endforeach
</select>
@if($printGradeId)
    <a href="{{ route('schedule.print.grade', $printGradeId) }}"
       target="_blank"
       class="px-3 py-2 bg-blue-500 text-white rounded-lg">
        {{ trans('schedules.print_grade') }}
    </a>
@endif
```

---

## Task 9: Add print routes

**File:** `routes/academic.php`

Add after the existing schedule route group:

```php
use App\Http\Controllers\SchedulePrintController;

Route::prefix('schedule/print')
    ->name('schedule.print.')
    ->controller(SchedulePrintController::class)
    ->group(function () {
        Route::get('/teacher/{user}', 'teacher')->name('teacher');
        Route::get('/classroom/{class}', 'classroom')->name('classroom');
        Route::get('/grade/{grade}', 'grade')->name('grade');
    });
```

---

## Task 10: Add translation keys

**File:** `lang/en/schedules.php` — add:

```php
'select_teacher' => 'Select Teacher',
'select_class' => 'Select Class',
'select_grade' => 'Select Grade',
'print_teacher' => 'Print Teacher Schedule',
'print_classroom' => 'Print Classroom Schedule',
'print_grade' => 'Print Grade Schedule',
'teacher_schedule' => 'Teacher Schedule',
'classroom_schedule' => 'Classroom Schedule',
'grade_schedule' => 'Grade Schedule',
```

**File:** `lang/ar/schedules.php` — add:

```php
'select_teacher' => 'اختر المدرس',
'select_class' => 'اختر الفصل',
'select_grade' => 'اختر المرحلة',
'print_teacher' => 'طباعة جدول المدرس',
'print_classroom' => 'طباعة جدول الفصل',
'print_grade' => 'طباعة جدول المرحلة',
'teacher_schedule' => 'جدول المدرس',
'classroom_schedule' => 'جدول الفصل',
'grade_schedule' => 'جدول المرحلة',
```

---

## Task 11: Run Pint and verify

```bash
vendor/bin/pint --dirty --format agent
```

---

## Task 12: Write tests

Create feature test `tests/Feature/ScheduleEnhancementTest.php`:

1. `test_auto_generate_clears_existing_entries` — create schedules, run autoGenerate, assert old entries deleted
2. `test_auto_generate_distributes_across_days` — run autoGenerate, assert each teacher has lessons on 4+ days
3. `test_auto_generate_respects_lesson_count` — teacher with lesson_count=4 gets exactly 4 lessons
4. `test_auto_generate_no_teacher_conflicts` — no duplicate teacher+period+day
5. `test_auto_generate_no_class_conflicts` — no duplicate class+period+day
6. `test_auto_generate_skips_teacher_without_grades` — teacher with no grades gets 0 lessons
7. `test_teacher_print_route_returns_view` — GET /schedule/print/teacher/{id} returns 200
8. `test_classroom_print_route_returns_view` — GET /schedule/print/classroom/{id} returns 200
9. `test_grade_print_route_returns_view` — GET /schedule/print/grade/{id} returns 200

Run: `php artisan test --compact --filter=ScheduleEnhancement`

---

## Execution Order

1. Task 1: Grade model relationship
2. Task 2: Rewrite autoGenerate()
3. Task 3: Add print properties to Livewire component
4. Task 9: Add print routes
5. Task 4: Create SchedulePrintController
6. Task 5: Teacher print view
7. Task 6: Classroom print view
8. Task 7: Grade print view
9. Task 8: Add print toolbar to Livewire view
10. Task 10: Translation keys
11. Task 11: Run Pint
12. Task 12: Write and run tests
