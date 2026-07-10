# Schedule Auto-Distribution & PDF Print Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Improve schedule auto-distribution to match each teacher's `lesson_count` exactly, and add PDF downloads for teacher, classroom, and grade schedules.

**Architecture:** Rewrite `autoGenerate()` in the existing `Schedules` Livewire component with fair round-robin distribution. Add 3 PDF Blade views using `laravel-mpdf` and 3 Livewire methods to generate downloads. Update the view with a print dropdown and confirmation dialog.

**Tech Stack:** Livewire v4, laravel-mpdf, Blade templates, Tailwind CSS v4

## Global Constraints
- PHP 8.5, Laravel 10, Livewire v4
- Use `protected $casts = []` on models (not `casts()` method)
- Run `vendor/bin/pint --dirty --format agent` after each task
- Use `php artisan test --compact` with filter for test runs
- Arabic RTL layout — PDF views must be RTL
- Follow existing code conventions (lowercase model names, `LogsActivity` trait)

---

## File Map

| File | Action | Purpose |
|---|---|---|
| `app/Models/schedules.php` | Modify | Rename `section()` → add `class()` alias |
| `app/Livewire/Schedules.php` | Modify | Rewrite `autoGenerate()`, add 3 PDF methods |
| `resources/views/livewire/Schedules/Schedules.blade.php` | Modify | Add print dropdown, confirmation, loading states |
| `resources/views/backend/schedules/pdf/teacher.blade.php` | Create | Teacher schedule PDF template |
| `resources/views/backend/schedules/pdf/classroom.blade.php` | Create | Classroom schedule PDF template |
| `resources/views/backend/schedules/pdf/grade.blade.php` | Create | Grade schedule PDF template |
| `lang/en/schedules.php` | Modify | Add new translation keys |
| `lang/ar/schedules.php` | Modify | Add new translation keys |

---

### Task 1: Fix schedules model relationship name

The view uses `->class` and `with('class')` but the model defines `section()`. Fix by adding a `class()` relationship method.

**Files:**
- Modify: `app/Models/schedules.php`

- [ ] **Step 1: Add class() relationship to schedules model**

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class schedules extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'job_id', 'class_id', 'day', 'period'];

    protected $table = 'schedules';

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(classes::class);
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(classes::class);
    }
}
```

- [ ] **Step 2: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 3: Verify the view eager load works**

Run: `php artisan tinker --execute="echo \App\Models\schedules::with('class:id,title')->first()?->class?->title ?? 'no data';"`

Expected: No error (may show "no data" if table is empty)

- [ ] **Step 4: Commit**

```bash
git add app/Models/schedules.php
git commit -m "fix: add class() relationship alias to schedules model"
```

---

### Task 2: Add translation keys for print features

**Files:**
- Modify: `lang/en/schedules.php`
- Modify: `lang/ar/schedules.php`

- [ ] **Step 1: Add English translations**

Add these keys to `lang/en/schedules.php`:

```php
'print_pdf' => 'Print PDF',
'teacher' => 'Teacher',
'classroom' => 'Classroom',
'grade' => 'Grade',
'select_teacher' => 'Select Teacher',
'select_classroom' => 'Select Classroom',
'select_grade' => 'Select Grade',
'download_pdf' => 'Download PDF',
'weekly_schedule' => 'Weekly Schedule',
'no_schedule' => 'No schedule assigned',
'auto_generate_confirm' => 'This will clear the existing schedule and generate a new one. Continue?',
'generation_summary' => ':full fully scheduled, :partial partially scheduled, :warnings warnings',
'saturday_short' => 'Sat',
'sunday_short' => 'Sun',
'monday_short' => 'Mon',
'tuesday_short' => 'Tue',
'wednesday_short' => 'Wed',
'thursday_short' => 'Thu',
'period' => 'Period',
'hours' => 'Hours',
'teacher_schedule' => 'Teacher Schedule',
'classroom_schedule' => 'Classroom Schedule',
'grade_schedule' => 'Grade Schedule',
'print_type' => 'Print Type',
'select_print_type' => 'Select Print Type',
```

- [ ] **Step 2: Add Arabic translations**

Add these keys to `lang/ar/schedules.php`:

```php
'print_pdf' => 'طباعة PDF',
'teacher' => 'المدرس',
'classroom' => 'الفصل',
'grade' => 'المستوى',
'select_teacher' => 'اختر المدرس',
'select_classroom' => 'اختر الفصل',
'select_grade' => 'اختر المستوى',
'download_pdf' => 'تحميل PDF',
'weekly_schedule' => 'الجدول الأسبوعي',
'no_schedule' => 'لا يوجد جدول مسجل',
'auto_generate_confirm' => 'سيتم مسح الجدول الحالي وإنشاء جدول جديد. هل تريد المتابعة؟',
'generation_summary' => ':full مدرس مكتمل, :partial مدرس جزئي, :warnings تحذيرات',
'saturday_short' => 'سبت',
'sunday_short' => 'أحد',
'monday_short' => 'اثنين',
'tuesday_short' => 'ثلاثاء',
'wednesday_short' => 'أربعاء',
'thursday_short' => 'خميس',
'period' => 'الحصة',
'hours' => 'الساعات',
'teacher_schedule' => 'جدول المدرس',
'classroom_schedule' => 'جدول الفصل',
'grade_schedule' => 'جدول المستوى',
'print_type' => 'نوع الطباعة',
'select_print_type' => 'اختر نوع الطباعة',
```

- [ ] **Step 3: Commit**

```bash
git add lang/en/schedules.php lang/ar/schedules.php
git commit -m "feat: add translation keys for schedule print and auto-generate features"
```

---

### Task 3: Rewrite autoGenerate() with lesson_count-based distribution

**Files:**
- Modify: `app/Livewire/Schedules.php`

- [ ] **Step 1: Replace the autoGenerate() method**

Replace the existing `autoGenerate()` method in `app/Livewire/Schedules.php` with:

```php
public function autoGenerate(): void
{
    $this->clearSchedule();

    $teachers = User::where('type', 'teacher')
        ->with('grades')
        ->get()
        ->filter(fn ($teacher) => $teacher->grades->isNotEmpty())
        ->values();

    $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];
    $periods = range(1, 8);

    $teacherGrades = [];
    foreach ($teachers as $teacher) {
        $teacherGrades[$teacher->id] = $teacher->grades->pluck('id')->toArray();
    }

    $classesByGrade = classes::all()->groupBy('grade_id');

    $assignedCounts = [];
    $busySlots = [];
    $warnings = [];
    $fullyScheduled = 0;
    $partiallyScheduled = 0;

    foreach ($days as $day) {
        foreach ($periods as $period) {
            $busySlots[$day][$period] = [
                'teachers' => [],
                'classes' => [],
            ];
        }
    }

    $teacherQueue = $teachers->sortByDesc(function ($teacher) {
        return $teacher->lesson_count ?? 24;
    })->values();

    $maxIterations = 1000;
    $iteration = 0;

    while ($teacherQueue->isNotEmpty() && $iteration < $maxIterations) {
        $iteration++;
        $teacher = $teacherQueue->shift();
        $teacherId = $teacher->id;
        $targetLessons = $teacher->lesson_count ?? 24;
        $currentCount = $assignedCounts[$teacherId] ?? 0;

        if ($currentCount >= $targetLessons) {
            continue;
        }

        $possibleGradeIds = $teacherGrades[$teacherId] ?? [];
        $assigned = false;

        foreach ($days as $day) {
            foreach ($periods as $period) {
                if (in_array($teacherId, $busySlots[$day][$period]['teachers'])) {
                    continue;
                }

                $targetClass = null;
                foreach ($possibleGradeIds as $gradeId) {
                    $gradeClasses = $classesByGrade->get($gradeId);
                    if ($gradeClasses) {
                        $targetClass = $gradeClasses->first(
                            fn ($c) => ! in_array($c->id, $busySlots[$day][$period]['classes'])
                        );
                        if ($targetClass) {
                            break;
                        }
                    }
                }

                if ($targetClass) {
                    schedules_Managment::create([
                        'user_id' => $teacherId,
                        'period' => $period,
                        'class_id' => $targetClass->id,
                        'job_id' => $teacher->job_id,
                        'day' => $day,
                    ]);

                    $busySlots[$day][$period]['teachers'][] = $teacherId;
                    $busySlots[$day][$period]['classes'][] = $targetClass->id;
                    $assignedCounts[$teacherId] = ($assignedCounts[$teacherId] ?? 0) + 1;
                    $assigned = true;
                    break 2;
                }
            }
            if ($assigned) {
                break;
            }
        }

        if (! $assigned) {
            $remaining = $targetLessons - ($assignedCounts[$teacherId] ?? 0);
            if ($remaining > 0) {
                $warnings[] = "{$teacher->name}: {$remaining} lessons could not be placed";
            }
            continue;
        }

        $newCount = $assignedCounts[$teacherId] ?? 0;
        if ($newCount < $targetLessons) {
            $teacherQueue->push($teacher);
        }
    }

    foreach ($teachers as $teacher) {
        $teacherId = $teacher->id;
        $target = $teacher->lesson_count ?? 24;
        $actual = $assignedCounts[$teacherId] ?? 0;
        if ($actual >= $target) {
            $fullyScheduled++;
        } else {
            $partiallyScheduled++;
        }
    }

    $summary = trans('schedules.generation_summary', [
        'full' => $fullyScheduled,
        'partial' => $partiallyScheduled,
        'warnings' => count($warnings),
    ]);

    $this->logActivity(trans('log.actions.auto_generated'), trans('log.models.schedules.auto_generated'));
    $this->dispatch('alert');
    $this->dispatch('refresh');
    session()->flash('success', $summary);
}
```

- [ ] **Step 2: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 3: Verify the component compiles**

Run: `php artisan view:clear && php artisan tinker --execute="echo 'ok';"`

Expected: `ok`

- [ ] **Step 4: Commit**

```bash
git add app/Livewire/Schedules.php
git commit -m "feat: rewrite autoGenerate() with lesson_count-based fair distribution"
```

---

### Task 4: Create teacher schedule PDF view

**Files:**
- Create: `resources/views/backend/schedules/pdf/teacher.blade.php`

- [ ] **Step 1: Create the PDF directory**

```bash
mkdir -p resources/views/backend/schedules/pdf
```

- [ ] **Step 2: Create teacher.blade.php**

```blade
@extends('layouts.pdf')

@section('content')
    <div class="text-center mb-4">
        <h2>{{ trans('schedules.teacher_schedule') }}</h2>
        <h3>{{ $teacher->name }}</h3>
        <p>{{ $teacher->job?->name ?? '' }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>{{ trans('schedules.period') }}</th>
                @foreach($days as $day)
                    <th>{{ trans('schedules.' . $day) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for($p = 1; $p <= 8; $p++)
                <tr>
                    <td><strong>{{ $p }}</strong></td>
                    @foreach($days as $day)
                        <td>
                            @php
                                $entry = $schedules->first(
                                    fn($s) => $s->day === $day && $s->period == $p
                                );
                            @endphp
                            {{ $entry?->class?->title ?? '-' }}
                        </td>
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
```

- [ ] **Step 3: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 4: Commit**

```bash
git add resources/views/backend/schedules/pdf/teacher.blade.php
git commit -m "feat: add teacher schedule PDF template"
```

---

### Task 5: Create classroom schedule PDF view

**Files:**
- Create: `resources/views/backend/schedules/pdf/classroom.blade.php`

- [ ] **Step 1: Create classroom.blade.php**

```blade
@extends('layouts.pdf')

@section('content')
    <div class="text-center mb-4">
        <h2>{{ trans('schedules.classroom_schedule') }}</h2>
        <h3>{{ $class->title }}</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>{{ trans('schedules.period') }}</th>
                @foreach($days as $day)
                    <th>{{ trans('schedules.' . $day) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for($p = 1; $p <= 8; $p++)
                <tr>
                    <td><strong>{{ $p }}</strong></td>
                    @foreach($days as $day)
                        <td>
                            @php
                                $entry = $schedules->first(
                                    fn($s) => $s->day === $day && $s->period == $p
                                );
                            @endphp
                            {{ $entry?->teacher?->name ?? '-' }}
                        </td>
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
```

- [ ] **Step 2: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 3: Commit**

```bash
git add resources/views/backend/schedules/pdf/classroom.blade.php
git commit -m "feat: add classroom schedule PDF template"
```

---

### Task 6: Create grade schedule PDF view

**Files:**
- Create: `resources/views/backend/schedules/pdf/grade.blade.php`

- [ ] **Step 1: Create grade.blade.php**

```blade
@extends('layouts.pdf')

@section('content')
    <div class="text-center mb-4">
        <h2>{{ trans('schedules.grade_schedule') }}</h2>
        <h3>{{ $grade->name }}</h3>
    </div>

    @foreach($classes as $class)
        <div class="mb-4">
            <h4 class="text-center">{{ $class->title }}</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('schedules.period') }}</th>
                        @foreach($days as $day)
                            <th>{{ trans('schedules.' . $day) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @for($p = 1; $p <= 8; $p++)
                        <tr>
                            <td><strong>{{ $p }}</strong></td>
                            @foreach($days as $day)
                                <td>
                                    @php
                                        $entry = $classSchedules[$class->id]->first(
                                            fn($s) => $s->day === $day && $s->period == $p
                                        ) ?? null;
                                    @endphp
                                    {{ $entry?->teacher?->name ?? '-' }}
                                </td>
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        @if(!$loop->last)
            <div style="page-break-after: always;"></div>
        @endif
    @endforeach
@endsection
```

- [ ] **Step 2: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 3: Commit**

```bash
git add resources/views/backend/schedules/pdf/grade.blade.php
git commit -m "feat: add grade schedule PDF template"
```

---

### Task 7: Add PDF download methods to Livewire component

**Files:**
- Modify: `app/Livewire/Schedules.php`

- [ ] **Step 1: Add use statements**

Add to the top of `app/Livewire/Schedules.php`:

```php
use App\Models\classes;
use App\Models\Grade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
```

- [ ] **Step 2: Add print properties**

Add these properties to the `Schedules` class:

```php
public $printType = null;
public $showPrintModal = false;
public $printEntityId = null;
```

- [ ] **Step 3: Add openPrintModal method**

```php
public function openPrintModal(string $type): void
{
    $this->printType = $type;
    $this->printEntityId = null;
    $this->showPrintModal = true;
}

public function closePrintModal(): void
{
    $this->showPrintModal = false;
    $this->printType = null;
    $this->printEntityId = null;
}
```

- [ ] **Step 4: Add printTeacherSchedule method**

```php
public function printTeacherSchedule(int $teacherId)
{
    $teacher = User::with('job')->findOrFail($teacherId);
    $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];

    $schedules = schedules_Managment::where('user_id', $teacherId)
        ->with('class:id,title')
        ->get();

    $pdf = Pdf::loadView('backend.schedules.pdf.teacher', [
        'teacher' => $teacher,
        'schedules' => $schedules,
        'days' => $days,
    ], [], [
        'format' => 'A4',
        'orientation' => 'L',
        'default_font_size' => 10,
        'margin_left' => 10,
        'margin_right' => 10,
        'margin_top' => 25,
        'margin_bottom' => 15,
    ]);

    return $pdf->download('teacher_schedule_' . $teacher->name . '.pdf');
}
```

- [ ] **Step 5: Add printClassroomSchedule method**

```php
public function printClassroomSchedule(int $classId)
{
    $class = classes::findOrFail($classId);
    $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];

    $schedules = schedules_Managment::where('class_id', $classId)
        ->with('teacher:id,name')
        ->get();

    $pdf = Pdf::loadView('backend.schedules.pdf.classroom', [
        'class' => $class,
        'schedules' => $schedules,
        'days' => $days,
    ], [], [
        'format' => 'A4',
        'orientation' => 'L',
        'default_font_size' => 10,
        'margin_left' => 10,
        'margin_right' => 10,
        'margin_top' => 25,
        'margin_bottom' => 15,
    ]);

    return $pdf->download('classroom_schedule_' . $class->title . '.pdf');
}
```

- [ ] **Step 6: Add printGradeSchedule method**

```php
public function printGradeSchedule(int $gradeId)
{
    $grade = Grade::findOrFail($gradeId);
    $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday'];

    $classes = classes::where('grade_id', $gradeId)->get();
    $classSchedules = [];

    foreach ($classes as $class) {
        $classSchedules[$class->id] = schedules_Managment::where('class_id', $class->id)
            ->with('teacher:id,name')
            ->get();
    }

    $pdf = Pdf::loadView('backend.schedules.pdf.grade', [
        'grade' => $grade,
        'classes' => $classes,
        'classSchedules' => $classSchedules,
        'days' => $days,
    ], [], [
        'format' => 'A4',
        'orientation' => 'L',
        'default_font_size' => 10,
        'margin_left' => 10,
        'margin_right' => 10,
        'margin_top' => 25,
        'margin_bottom' => 15,
    ]);

    return $pdf->download('grade_schedule_' . $grade->name . '.pdf');
}
```

- [ ] **Step 7: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 8: Commit**

```bash
git add app/Livewire/Schedules.php
git commit -m "feat: add PDF download methods for teacher, classroom, and grade schedules"
```

---

### Task 8: Update Livewire view with print dropdown and confirmation

**Files:**
- Modify: `resources/views/livewire/Schedules/Schedules.blade.php`

- [ ] **Step 1: Replace the print button with a print PDF dropdown**

Replace the existing print button (line 20-22) with a print dropdown:

```blade
<div class="relative" x-data="{ openPrint: false }">
    <button @click="openPrint = !openPrint" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-sm">
        <i class="ti ti-file-export"></i> {{ trans('schedules.print_pdf') }}
    </button>
    @if(openPrint)
        <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50" @click.outside="openPrint = false">
            <button wire:click="openPrintModal('teacher')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-lg">
                <i class="ti ti-user"></i> {{ trans('schedules.teacher') }}
            </button>
            <button wire:click="openPrintModal('classroom')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="ti ti-building"></i> {{ trans('schedules.classroom') }}
            </button>
            <button wire:click="openPrintModal('grade')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-b-lg">
                <i class="ti ti-school"></i> {{ trans('schedules.grade') }}
            </button>
        </div>
    @endif
</div>
```

- [ ] **Step 2: Add confirmation to autoGenerate button**

Replace the auto-generate button (line 23-25) with:

```blade
<button class="px-3 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 text-sm"
    wire:click="autoGenerate"
    onclick="confirm('{{ trans('schedules.auto_generate_confirm') }}') || event.stopImmediatePropagation()">
    <i class="ti ti-settings"></i> {{ trans('schedules.auto_generate') }}
</button>
```

- [ ] **Step 3: Add wire:loading to the action buttons**

Add `wire:loading` indicators to the button group:

```blade
<div class="flex flex-wrap gap-2 items-start">
    <div class="relative" x-data="{ openPrint: false }">
        <button @click="openPrint = !openPrint" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-sm">
            <i class="ti ti-file-export"></i> {{ trans('schedules.print_pdf') }}
        </button>
        @if(openPrint)
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50" @click.outside="openPrint = false">
                <button wire:click="openPrintModal('teacher')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-t-lg">
                    <i class="ti ti-user"></i> {{ trans('schedules.teacher') }}
                </button>
                <button wire:click="openPrintModal('classroom')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    <i class="ti ti-building"></i> {{ trans('schedules.classroom') }}
                </button>
                <button wire:click="openPrintModal('grade')" @click="openPrint = false" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-b-lg">
                    <i class="ti ti-school"></i> {{ trans('schedules.grade') }}
                </button>
            </div>
        @endif
    </div>
    <button class="px-3 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 text-sm"
        wire:click="autoGenerate"
        wire:loading.attr="disabled"
        onclick="confirm('{{ trans('schedules.auto_generate_confirm') }}') || event.stopImmediatePropagation()">
        <i class="ti ti-settings"></i> {{ trans('schedules.auto_generate') }}
    </button>
    <button class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 text-sm"
        wire:click="clearSchedule"
        onclick="confirm('{{ trans('schedules.clear_confirm') }}') || event.stopImmediatePropagation()">
        <i class="ti ti-trash"></i> {{ trans('schedules.clear_schedule') }}
    </button>
</div>
```

- [ ] **Step 4: Add print entity selection modal**

Add this modal after the existing `showScheduleModal` modal (after line 122):

```blade
@if ($showPrintModal)
    <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md mx-4">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('schedules.print_pdf') }}</h3>
                <button wire:click="closePrintModal" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        @if($printType === 'teacher')
                            {{ trans('schedules.select_teacher') }}
                        @elseif($printType === 'classroom')
                            {{ trans('schedules.select_classroom') }}
                        @else
                            {{ trans('schedules.select_grade') }}
                        @endif
                    </label>

                    @if($printType === 'teacher')
                        <select wire:model="printEntityId" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                            <option value="">{{ trans('schedules.select_teacher') }}</option>
                            @foreach($Teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    @elseif($printType === 'classroom')
                        <select wire:model="printEntityId" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                            <option value="">{{ trans('schedules.select_classroom') }}</option>
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->title }}</option>
                            @endforeach
                        </select>
                    @else
                        <select wire:model="printEntityId" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                            <option value="">{{ trans('schedules.select_grade') }}</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            </div>
            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                <button wire:click="closePrintModal" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium">{{ trans('schedules.cancel') }}</button>
                <button
                    wire:click="
                        @if($printType === 'teacher') printTeacherSchedule($printEntityId)
                        @elseif($printType === 'classroom') printClassroomSchedule($printEntityId)
                        @else printGradeSchedule($printEntityId)
                        @endif
                    "
                    wire:loading.attr="disabled"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                    <span wire:loading.remove wire:target="printTeacherSchedule, printClassroomSchedule, printGradeSchedule">
                        <i class="ti ti-download"></i> {{ trans('schedules.download_pdf') }}
                    </span>
                    <span wire:loading wire:target="printTeacherSchedule, printClassroomSchedule, printGradeSchedule">
                        {{ trans('general.loading') }}...
                    </span>
                </button>
            </div>
        </div>
    </div>
@endif
```

- [ ] **Step 5: Add grades to render method**

Update the `render()` method to include grades:

```php
public function render()
{
    return view('livewire.Schedules.Schedules', [
        'Teachers' => User::where('type', 'teacher')->with('job')->get(),
        'Schedules' => schedules_Managment::where('day', $this->selectedDay)->with('class:id,title')->get(),
        'classes' => classes::all(),
        'grades' => Grade::all(),
    ]);
}
```

- [ ] **Step 6: Add Grade import to Livewire component**

Add `use App\Models\Grade;` to the imports at the top of `app/Livewire/Schedules.php`.

- [ ] **Step 7: Run pint**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 8: Commit**

```bash
git add resources/views/livewire/Schedules/Schedules.blade.php app/Livewire/Schedules.php
git commit -m "feat: add print PDF dropdown with entity selection modal"
```

---

### Task 9: Verify the full feature

**Files:**
- Test: `app/Livewire/Schedules.php`
- Test: Views render correctly

- [ ] **Step 1: Clear caches**

```bash
php artisan view:clear && php artisan cache:clear
```

- [ ] **Step 2: Verify routes exist**

```bash
php artisan route:list --name=schedule
```

Expected: Shows `schedule.index` route

- [ ] **Step 3: Verify Livewire component loads**

```bash
php artisan tinker --execute="
    \$component = new \App\Livewire\Schedules();
    echo 'Component created OK';
"
```

Expected: `Component created OK`

- [ ] **Step 4: Verify PDF views exist**

```bash
ls -la resources/views/backend/schedules/pdf/
```

Expected: Shows `teacher.blade.php`, `classroom.blade.php`, `grade.blade.php`

- [ ] **Step 5: Run pint one final time**

Run: `vendor/bin/pint --dirty --format agent`

- [ ] **Step 6: Run full test suite (if tests exist)**

Run: `php artisan test --compact`

Expected: All tests pass

- [ ] **Step 7: Final commit**

```bash
git add -A
git commit -m "feat: complete schedule auto-distribution and PDF print feature"
```
