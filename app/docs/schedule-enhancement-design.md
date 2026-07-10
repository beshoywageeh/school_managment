# Schedule Enhancement Design

## Overview

Enhance the existing `Schedules` Livewire component to support:
1. Improved auto-distribution of lessons across teachers
2. Print each teacher's full-week schedule
3. Print each classroom's full-week schedule
4. Print each grade's full-week schedule (all classes in one grid)

## Architecture

**Approach:** Extend the existing `Schedules` Livewire component + new print routes/controllers.

- `app/Livewire/Schedules.php` — enhanced `autoGenerate()` method
- `app/Http/Controllers/SchedulePrintController.php` — new controller for 3 print routes
- `resources/views/backend/schedules/print/teacher.blade.php` — teacher print view
- `resources/views/backend/schedules/print/classroom.blade.php` — classroom print view
- `resources/views/backend/schedules/print/grade.blade.php` — grade print view
- `routes/academic.php` — 3 new print routes

No new models, migrations, or service classes needed.

---

## 1. Auto-Distribution Algorithm

### Current Behavior
Iterates `days → periods → teachers`, assigns each teacher the first available class from their assigned grades until `lesson_count` is reached. This fills Saturday completely before Sunday, leading to uneven day distribution.

### New Behavior
Teachers are distributed evenly across days and periods.

**Algorithm:**
1. For each teacher, calculate lessons per day: `ceil(lesson_count / 6)`
2. For each period (1-8), iterate through each day
3. For each day+period slot, find an available teacher who:
   - Is not already assigned in this period on this day
   - Has not reached their daily lesson limit
   - Has not reached their total `lesson_count`
4. Find a class from the teacher's assigned grades that is not busy in this period on this day
5. Create the schedule entry

**Key difference:** Instead of iterating `days → periods → teachers`, iterate `periods → days → teachers` to ensure each teacher gets spread across days before filling any single day.

**Pseudocode:**
```
for period = 1 to 8:
    for day in [sat, sun, mon, tue, wed, thu]:
        for each teacher:
            if teacher already busy this period+day: skip
            if teacher reached daily limit: skip
            if teacher reached total lesson_count: skip
            find available class from teacher's grades
            if found: create schedule entry, mark teacher+class as busy
```

---

## 2. Print Routes

### Route Definitions (add to `routes/academic.php`)
```php
Route::prefix('schedule/print')
    ->name('schedule.print.')
    ->controller(SchedulePrintController::class)
    ->group(function () {
        Route::get('/teacher/{user}', 'teacher')->name('teacher');
        Route::get('/classroom/{class}', 'classroom')->name('classroom');
        Route::get('/grade/{grade}', 'grade')->name('grade');
    });
```

### Controller: `SchedulePrintController`

Three methods, each queries schedules and returns a printable Blade view:

**`teacher(User $user)`**
- Query: `Schedule::where('user_id', $user->id)->with('section:id,title')->get()`
- Group by day, then by period
- Pass to `backend.schedules.print.teacher` view

**`classroom(classes $class)`**
- Query: `Schedule::where('class_id', $class->id)->with('teacher:id,name')->get()`
- Group by day, then by period
- Pass to `backend.schedules.print.classroom` view

**`grade(Grade $grade)`**
- Get all classes in this grade: `$grade->classes`
- For each class, get its schedules for all days
- Pass to `backend.schedules.print.grade` view

### Permissions
Add `scheduale-list` permission check (same as existing schedule index).

---

## 3. Print Views

### Common Layout
- Standalone Blade layout (no app sidebar/nav) or minimal layout with print button
- `@media print` CSS to hide the print button and format the table
- RTL support (Arabic language)
- Clean table styling with borders

### Teacher Print View (`print/teacher.blade.php`)
**Header:** Teacher name, job title
**Table:**
- Rows: Periods (1st through 8th)
- Columns: Days (Saturday through Thursday)
- Cells: Class title (or empty)

```
+----------+----------+----------+----------+----------+----------+----------+
| Period   | Saturday | Sunday   | Monday   | Tuesday  | Wednesd. | Thursday |
+----------+----------+----------+----------+----------+----------+----------+
| 1st      | Class A  | Class B  |   -      | Class A  |   -      | Class C  |
| 2nd      | Class C  |   -      | Class A  |   -      | Class B  |   -      |
...
+----------+----------+----------+----------+----------+----------+----------+
```

### Classroom Print View (`print/classroom.blade.php`)
**Header:** Class title, grade name
**Table:**
- Rows: Periods (1st through 8th)
- Columns: Days (Saturday through Thursday)
- Cells: Teacher name (or empty)

```
+----------+----------+----------+----------+----------+----------+----------+
| Period   | Saturday | Sunday   | Monday   | Tuesday  | Wednesd. | Thursday |
+----------+----------+----------+----------+----------+----------+----------+
| 1st      | Mr. Ali  | Mr. Salem|   -      | Mr. Ali  |   -      | Mr. Khaled|
| 2nd      | Mr. Khaled|  -      | Mr. Ali  |   -      | Mr. Salem|   -      |
...
+----------+----------+----------+----------+----------+----------+----------+
```

### Grade Print View (`print/grade.blade.php`)
**Header:** Grade name
**Structure:** For each day, show a grid with classes as columns and periods as rows.

```
--- Saturday ---
+----------+----------+----------+----------+
| Period   | Class 1-A| Class 1-B| Class 1-C|
+----------+----------+----------+----------+
| 1st      | Mr. Ali  | Mr. Salem|   -      |
| 2nd      | Mr. Khaled|  -      | Mr. Ali  |
...

--- Sunday ---
+----------+----------+----------+----------+
| Period   | Class 1-A| Class 1-B| Class 1-C|
+----------+----------+----------+----------+
| 1st      |   -      | Mr. Salem| Mr. Ali  |
...
```

---

## 4. UI Changes to Schedules View

Add a print toolbar below the existing buttons with three dropdowns:

```blade
<div class="flex gap-4 items-center">
    {{-- Existing buttons: Print, Auto Generate, Clear --}}

    {{-- Print Teacher Schedule --}}
    <select wire:model="printTeacherId" class="...">
        <option value="">{{ trans('schedules.select_teacher') }}</option>
        @foreach($Teachers as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
        @endforeach
    </select>
    @if($printTeacherId)
        <a href="{{ route('schedule.print.teacher', $printTeacherId) }}"
           target="_blank" class="btn btn-primary">
            {{ trans('schedules.print_teacher') }}
        </a>
    @endif

    {{-- Print Classroom Schedule --}}
    <select wire:model="printClassId" class="...">
        <option value="">{{ trans('schedules.select_class') }}</option>
        @foreach($classes as $class)
            <option value="{{ $class->id }}">{{ $class->title }}</option>
        @endforeach
    </select>
    @if($printClassId)
        <a href="{{ route('schedule.print.classroom', $printClassId) }}"
           target="_blank" class="btn btn-primary">
            {{ trans('schedules.print_classroom') }}
        </a>
    @endif

    {{-- Print Grade Schedule --}}
    <select wire:model="printGradeId" class="...">
        <option value="">{{ trans('schedules.select_grade') }}</option>
        @foreach($grades as $grade)
            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
        @endforeach
    </select>
    @if($printGradeId)
        <a href="{{ route('schedule.print.grade', $printGradeId) }}"
           target="_blank" class="btn btn-primary">
            {{ trans('schedules.print_grade') }}
        </a>
    @endif
</div>
```

New Livewire properties: `$printTeacherId`, `$printClassId`, `$printGradeId`

---

## 5. Files to Create/Modify

| File | Action |
|------|--------|
| `app/Livewire/Schedules.php` | Modify — improve `autoGenerate()`, add print properties, add grades to render |
| `app/Http/Controllers/SchedulePrintController.php` | Create — 3 print methods |
| `resources/views/backend/schedules/print/teacher.blade.php` | Create — teacher print view |
| `resources/views/backend/schedules/print/classroom.blade.php` | Create — classroom print view |
| `resources/views/backend/schedules/print/grade.blade.php` | Create — grade print view |
| `resources/views/livewire/Schedules/Schedules.blade.php` | Modify — add print toolbar |
| `routes/academic.php` | Modify — add 3 print routes |
| `lang/en/schedules.php` | Modify — add new translation keys |
| `lang/ar/schedules.php` | Modify — add new translation keys |

---

## 6. Translation Keys to Add

```php
// en/schedules.php
'select_teacher' => 'Select Teacher',
'select_class' => 'Select Class',
'select_grade' => 'Select Grade',
'print_teacher' => 'Print Teacher Schedule',
'print_classroom' => 'Print Classroom Schedule',
'print_grade' => 'Print Grade Schedule',
'teacher_schedule' => 'Teacher Schedule',
'classroom_schedule' => 'Classroom Schedule',
'grade_schedule' => 'Grade Schedule',
'period' => 'Period',
```

---

## 7. Testing

- Verify auto-generate distributes lessons across days evenly
- Verify no teacher or class conflicts after auto-generate
- Verify each teacher respects their `lesson_count` limit
- Verify print routes return correct data for teacher/classroom/grade
- Verify print views render correct tables with proper RTL support
