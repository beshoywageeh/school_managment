# Schedule Auto-Distribution & PDF Print Design

## Overview

Improve the `Schedules` Livewire component to:
1. Auto-distribute lessons exactly matching each teacher's `lesson_count`
2. Add PDF download for teacher, classroom, and grade schedules

## Approach

All-in-Livewire — auto-distribution improvements and PDF generation methods live in the existing `Schedules` Livewire component. PDFs use the project's existing `laravel-mpdf` package.

## 1. Auto-Distribution Algorithm

### Goal
Each teacher receives exactly `lesson_count` lessons (from `users.lesson_count`).

### Strategy
1. Clear existing schedule after user confirmation (reuse existing `clearSchedule()` with a confirmation prompt)
2. Fetch all teachers with `type = teacher`, their `lesson_count`, and assigned grades
3. Calculate total available slots: 6 days × 8 periods = 48 (each slot holds one teacher + one class)
4. If total requested lessons across all teachers exceeds 48, warn the user before proceeding — distribute as many as possible but not all teachers may reach their full `lesson_count`
5. Process teachers sorted by descending remaining lessons — teachers with more lessons to fill get first pick of available slots
6. For each teacher-period assignment:
   - Teacher must not already be busy in that slot
   - A class from the teacher's assigned grades must be free in that slot
7. Track and report: teachers fully scheduled, partially scheduled, and warnings

### Fallback
- Teacher with no assigned grades → skip, log warning
- No free class available in any slot → log which lessons couldn't be placed

### Post-generation summary
Flash message: "X/Y teachers fully scheduled, Z warnings"

## 2. PDF Print Views

### Three new Blade views

All extend `layouts.pdf` and follow existing PDF patterns in the project.

#### Teacher Schedule PDF
- **View:** `backend/schedules/pdf/teacher.blade.php`
- **Input:** teacher ID
- **Content:** Teacher name, weekly grid (days as columns, periods 1-8 as rows, class name in each cell)
- **One page per teacher**

#### Classroom Schedule PDF
- **View:** `backend/schedules/pdf/classroom.blade.php`
- **Input:** class ID
- **Content:** Class name, weekly grid (days as columns, periods 1-8 as rows, teacher name in each cell)
- **One page per classroom**

#### Grade Schedule PDF
- **View:** `backend/schedules/pdf/grade.blade.php`
- **Input:** grade ID
- **Content:** Grade name, then a table per class in that grade with its weekly schedule
- **Multiple pages if many classes**

### PDF generation
Use `PDF::loadView()` with `A4` format, following the pattern in `GradesController`. Return `$pdf->download()` for stream download.

## 3. Livewire Component Changes

### New methods

| Method | Description |
|---|---|
| `printTeacherSchedule($teacherId)` | Query teacher's full week schedule, generate PDF, return download |
| `printClassroomSchedule($classId)` | Query class's full week schedule, generate PDF, return download |
| `printGradeSchedule($gradeId)` | Query all classes in grade with schedules, generate PDF, return download |

### Properties

| Property | Type | Purpose |
|---|---|---|
| `$printType` | ?string | Selected print type: 'teacher', 'classroom', 'grade' |
| `$printEntityId` | ?int | Selected entity ID for print |

### Listeners

No new listeners needed. PDF methods return responses directly via Livewire's `response()->streamDownload()` or `$pdf->download()`.

## 4. View Changes

### `Schedules.blade.php`

- Add "Print PDF" dropdown button next to existing Print/Auto Generate/Clear buttons
- Dropdown has 3 items: Teacher, Classroom, Grade
- Each item shows a sub-dropdown to select specific entity
- Button triggers `wire:click="printTeacherSchedule($id)"` etc.
- Add `wire:loading` indicator during PDF generation

### Dropdown UX
- Click "Print PDF" → opens a dropdown with 3 options: Teacher / Classroom / Grade
- Selecting an option opens a modal with a search/select field to pick the specific teacher/class/grade
- Click "Download" in the modal → triggers PDF generation and download
- Modal closes automatically after download starts

## 5. Bug Fixes

- Fix relationship name mismatch: view uses `->class` but model defines `section()`. Will update the eager load key or rename the relationship to `class` (or `section` consistently).

## 6. Files to Create/Modify

### Create
- `resources/views/backend/schedules/pdf/teacher.blade.php`
- `resources/views/backend/schedules/pdf/classroom.blade.php`
- `resources/views/backend/schedules/pdf/grade.blade.php`

### Modify
- `app/Livewire/Schedules.php` — add auto-distribution logic + PDF methods
- `resources/views/livewire/Schedules/Schedules.blade.php` — add print dropdown + loading states
- `app/Models/schedules.php` — fix relationship name if needed

## 7. Testing

- Verify auto-distribution respects `lesson_count` exactly
- Verify no teacher/class conflicts after generation
- Verify PDF downloads for each type with correct data
- Verify empty schedule produces valid PDF with "No schedule" message
- Verify edge case: teacher with no grades is skipped
- Verify edge case: total lessons exceed 48 slots → warning shown
