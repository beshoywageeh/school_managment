# Tasks: Schedule Enhancement

## User Stories

| Story | Description | Priority |
|-------|-------------|----------|
| US1 | Fair auto-distribution of lessons across teachers | P1 |
| US2 | Print teacher's weekly schedule | P1 |
| US3 | Print classroom's weekly schedule | P1 |
| US4 | Print grade's weekly schedule | P1 |

---

## Task ID Mapping (tasks.md ↔ plan.md)

| Tasks.md ID | Plan Task # | Description |
|-------------|-------------|-------------|
| T001 | Task 1 | Grade model classes() relationship |
| T002 | Task 3 | Print properties + grades in render() |
| T003 | Task 9 | Print routes |
| T004 | Task 10 (EN) | English translation keys |
| T005 | Task 10 (AR) | Arabic translation keys |
| T006 | Task 2 | Rewrite autoGenerate() |
| T007 | Task 4 | SchedulePrintController |
| T008 | Task 5 | Teacher print view |
| T009 | Task 4 (method) | Classroom print controller method |
| T010 | Task 6 | Classroom print view |
| T011 | Task 4 (method) | Grade print controller method |
| T012 | Task 7 | Grade print view |
| T013 | Task 8 | Print toolbar in Livewire view |
| T014 | Task 11 | Run Pint |
| T015 | Task 12 | Write tests |
| T016 | — | Run tests |

---

## Phase 1: Setup

- [ ] T001 Add `classes()` HasMany relationship to `app/Models/Grade.php` — return `$this->hasMany(classes::class, 'grade_id')`

---

## Phase 2: Foundational

- [ ] T002 Add print properties and grades to Livewire component `app/Livewire/Schedules.php` — add `$printTeacherId`, `$printClassId`, `$printGradeId` public properties and add `'grades' => Grade::all()` to render() return array
- [ ] T003 Add print routes to `routes/academic.php` — add `Route::prefix('schedule/print')->name('schedule.print.')->controller(SchedulePrintController::class)` group with 3 GET routes for teacher, classroom, grade
- [ ] T004 Add English translation keys to `lang/en/schedules.php` — add select_teacher, select_class, select_grade, print_teacher, print_classroom, print_grade, teacher_schedule, classroom_schedule, grade_schedule
- [ ] T005 Add Arabic translation keys to `lang/ar/schedules.php` — add matching Arabic translations for all 9 new keys

---

## Phase 3: US1 — Fair Auto-Distribution

**Goal:** Administrator clicks "Auto Generate" and lessons are distributed evenly across all 6 days, respecting each teacher's lesson_count, with no conflicts.

**Test Criteria:**
- Each teacher gets exactly their lesson_count lessons (or fewer if slots unavailable)
- No teacher has all lessons on the same day (spread across 4+ days when possible)
- Zero teacher conflicts (same teacher + period + day)
- Zero class conflicts (same class + period + day)
- Teachers with no grades are skipped silently
- Clicking auto-generate clears existing entries first

- [ ] T006 [US1] Rewrite `autoGenerate()` method in `app/Livewire/Schedules.php` — replace with period→day→teacher iteration, add auto-clear before regenerating, skip teachers with no grades, track per-day counts

---

## Phase 4: US2 — Teacher Schedule Print

**Goal:** Administrator selects a teacher from dropdown, clicks print, and a new tab shows the teacher's full-week schedule table with a print button.

**Test Criteria:**
- Print route returns 200 for valid teacher ID
- View shows table with 8 period rows and 6 day columns
- Each cell shows class title or dash
- Print button triggers window.print()
- Print button hidden during printing
- RTL layout supported

- [ ] T007 [US2] Create `app/Http/Controllers/SchedulePrintController.php` — add `teacher(User $user)` method that queries schedules grouped by day, passes to view with user and school
- [ ] T008 [P] [US2] Create `resources/views/backend/schedules/print/teacher.blade.php` — standalone HTML with inline styles, @page A4 landscape, @media print hides .no-print, table with periods as rows and days as columns, cells show class title

---

## Phase 5: US3 — Classroom Schedule Print

**Goal:** Administrator selects a classroom from dropdown, clicks print, and a new tab shows the classroom's full-week schedule table with teacher names.

**Test Criteria:**
- Print route returns 200 for valid class ID
- View shows table with 8 period rows and 6 day columns
- Each cell shows teacher name or dash
- Header shows class title and grade name

- [ ] T009 [US3] Add `classroom(classes $class)` method to `app/Http/Controllers/SchedulePrintController.php` — query schedules for class grouped by day, pass to view with class and school
- [ ] T010 [P] [US3] Create `resources/views/backend/schedules/print/classroom.blade.php` — standalone HTML, same structure as teacher view but header shows class title + grade name, cells show teacher name

---

## Phase 6: US4 — Grade Schedule Print

**Goal:** Administrator selects a grade from dropdown, clicks print, and a new tab shows a separate table for each day with classes as columns and teacher names in cells.

**Test Criteria:**
- Print route returns 200 for valid grade ID
- View shows 6 separate tables (one per day)
- Each table has periods as rows and classes as columns
- Each cell shows teacher name or dash

- [ ] T011 [US4] Add `grade(Grade $grade)` method to `app/Http/Controllers/SchedulePrintController.php` — query schedules for all classes in grade grouped by day, pass to view with grade, classes, and school
- [ ] T012 [P] [US4] Create `resources/views/backend/schedules/print/grade.blade.php` — standalone HTML, foreach day a separate table with periods as rows and classes as columns, cells show teacher name

---

## Phase 7: UI Integration

- [ ] T013 [P] Add print toolbar to `resources/views/livewire/Schedules/Schedules.blade.php` — add 3 select dropdowns (teacher, class, grade) with conditional print links that open in new tabs

---

## Phase 8: Polish

- [ ] T014 Run Pint formatter `vendor/bin/pint --dirty --format agent`
- [ ] T015 Create feature test `tests/Feature/ScheduleEnhancementTest.php` — test auto-generate clears entries, distributes across days, respects lesson_count, no conflicts, skips teachers without grades, print routes return 200, print views contain correct table structure (period rows, day columns), print views contain RTL `dir="rtl"` attribute, print views include print button
- [ ] T016 Run tests `php artisan test --compact --filter=ScheduleEnhancement`

---

## Dependencies

```
T001 ──→ T006 (Grade classes() needed for autoGenerate)
T002 ──→ T013 (print properties needed for toolbar)
T003 ──→ T007, T009, T011 (routes needed before controller methods)
T004, T005 ──→ T008, T010, T012, T013 (translations needed for views)
T007 ──→ T009, T011 (controller class exists before adding methods)
T007 ──→ T008 (teacher method before teacher view)
T009 ──→ T010 (classroom method before classroom view)
T011 ──→ T012 (grade method before grade view)
T006-T013 ──→ T014 (all code before Pint)
T014 ──→ T015 (formatted code before tests)
```

## Parallel Execution Opportunities

| Group | Tasks | Reason |
|-------|-------|--------|
| A | T004, T005 | Independent translation files |
| B | T008, T010, T012 | Independent print views (different files) |
| C | T007, T009, T011 | Can be done sequentially in one controller file |

## Implementation Strategy

**MVP Scope:** US1 (Fair Auto-Distribution) — Tasks T001-T006
- This is the core algorithmic improvement
- Can be tested independently
- No UI dependencies beyond existing Livewire view

**Full Delivery Order:**
1. US1 (T001-T006) — algorithm
2. US2 (T007-T008) — teacher print
3. US3 (T009-T010) — classroom print
4. US4 (T011-T012) — grade print
5. UI Integration (T013) — toolbar
6. Polish (T014-T016) — formatting + tests
