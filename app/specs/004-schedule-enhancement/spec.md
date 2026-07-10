# Schedule Enhancement Specification

## Overview

The school management system currently supports manual schedule assignment and a basic auto-generation feature. This enhancement improves the auto-distribution algorithm to fairly balance lessons across teachers and adds printable schedule views for teachers, classrooms, and grades.

## Actors

- **School Administrator**: Assigns schedules, triggers auto-generation, prints schedules
- **Teacher**: Views their own schedule (read-only through existing UI)
- **School Staff**: Views classroom and grade schedules

## User Scenarios

### Scenario 1: Auto-Distribute Lessons Fairly

**Given** the school has 10 teachers, each with different `lesson_count` limits (e.g., 24, 18, 12), and 6 working days with 8 periods each

**When** the administrator clicks "Auto Generate"

**Then** the system distributes each teacher's lessons evenly across all 6 days, so no teacher has all their lessons on the same day(s), and each teacher receives exactly their `lesson_count` number of lessons (or fewer if not enough slots are available)

**And** no teacher is assigned to two classes in the same period on the same day

**And** no class has two teachers assigned in the same period on the same day

### Scenario 2: Print a Teacher's Weekly Schedule

**Given** a teacher has been assigned lessons across the week

**When** the administrator selects a teacher from the "Print Teacher" dropdown and clicks the print button

**Then** a new browser tab opens showing the teacher's full weekly schedule in a table format (periods as rows, days as columns)

**And** each cell shows the class name assigned to that teacher at that period on that day (or empty if no lesson)

**And** the page includes a "Print" button that triggers the browser's print dialog

### Scenario 3: Print a Classroom's Weekly Schedule

**Given** a classroom has been assigned lessons throughout the week

**When** the administrator selects a classroom from the "Print Classroom" dropdown and clicks the print button

**Then** a new browser tab opens showing the classroom's full weekly schedule (periods as rows, days as columns)

**And** each cell shows the teacher name assigned to that class at that period on that day (or empty)

### Scenario 4: Print a Grade's Weekly Schedule

**Given** a grade contains multiple classes (e.g., Grade 1 has Class 1-A, Class 1-B, Class 1-C)

**When** the administrator selects a grade from the "Print Grade" dropdown and clicks the print button

**Then** a new browser tab opens showing a separate table for each day of the week

**And** each day's table has periods as rows and classes within the grade as columns

**And** each cell shows the teacher name for that class at that period on that day

### Scenario 5: Manual Schedule Assignment (Existing)

**Given** the administrator is viewing the schedule grid for a specific day

**When** they click the "+" button on a teacher row for a specific period

**And** select a class from the modal and save

**Then** the schedule entry is created with conflict checking (no teacher or class double-booking)

**And** the teacher's lesson count is validated against their limit

## Functional Requirements

### FR-1: Fair Auto-Distribution

- The system must distribute each teacher's lessons across all 6 working days (Saturday through Thursday) rather than filling one day completely before moving to the next
- Each teacher must receive exactly their configured `lesson_count` number of lessons, or fewer if insufficient available slots exist
- The system must not create any teacher conflict (same teacher, same period, same day)
- The system must not create any class conflict (same class, same period, same day)
- Teachers must be assigned only to classes within their assigned grades
- When clicking "Auto Generate", all existing schedule entries must be removed first before regenerating
- Teachers with no grades assigned in the `teacher_grade` pivot table must be skipped silently (they receive no lessons)

### FR-2: Teacher Schedule Print

- A dropdown must list all teachers in the system
- Selecting a teacher and clicking print must open a new browser tab with that teacher's full weekly schedule
- The schedule must show a table with periods (1st through 8th) as rows and days (Saturday through Thursday) as columns
- Each cell must display the class title for that teacher's lesson at that period/day, or be empty if no lesson is assigned
- A print button must be available that triggers the browser's native print dialog
- The printed output must be formatted for readability with clear borders and alignment

### FR-3: Classroom Schedule Print

- A dropdown must list all classrooms in the system
- Selecting a classroom and clicking print must open a new browser tab with that classroom's full weekly schedule
- The schedule must show a table with periods as rows and days as columns
- Each cell must display the teacher name for that classroom's lesson at that period/day, or be empty

### FR-4: Grade Schedule Print

- A dropdown must list all grades in the system
- Selecting a grade and clicking print must open a new browser tab with that grade's full weekly schedule
- The schedule must display a separate table for each day (Saturday through Thursday)
- Each day's table must have periods as rows and classes within that grade as columns
- Each cell must display the teacher name for that class at that period on that day, or be empty

### FR-5: Print Layout Quality

- All print views must use a clean, minimal layout (no navigation sidebar or unrelated UI elements)
- The print button itself must be hidden when the browser's print dialog is triggered
- RTL (right-to-left) text direction must be supported for Arabic language
- Table styling must include visible borders for readability when printed

## Success Criteria

- After auto-generation, every teacher's lessons are spread across at least 4 of the 6 working days (when lesson_count allows)
- Zero teacher conflicts (no teacher assigned to two places at the same time) after auto-generation
- Zero class conflicts (no class assigned two teachers at the same time) after auto-generation
- Each teacher receives exactly their configured lesson count after auto-generation (unless insufficient slots exist)
- Teacher schedule print loads quickly and displays the correct full-week schedule
- Classroom schedule print loads quickly and displays the correct full-week schedule
- Grade schedule print loads quickly and displays all classes in that grade for all 6 days
- Printed output is readable and properly formatted with clear table borders
- RTL text renders correctly in Arabic

## Key Entities

| Entity | Description |
|--------|-------------|
| Teacher (User) | A staff member with type=teacher, assigned to specific grades, with a lesson count limit |
| Class | A classroom section belonging to a grade, where students attend lessons |
| Grade | A school grade level containing multiple classes |
| Schedule Entry | A record linking a teacher, class, period, and day |
| Period | A time slot within a school day (1st through 8th) |
| Day | A working day of the week (Saturday through Thursday, 6 days) |

## Assumptions

- The existing `schedules` table structure (user_id, class_id, job_id, day, period) is sufficient — no schema changes needed
- Teachers are identified by `User.type = 1` (teacher type)
- Each teacher has a `lesson_count` field that determines how many lessons they should teach per week
- The `teacher_grade` pivot table correctly maps which grades each teacher can teach
- Friday is not a working day (6-day school week: Saturday through Thursday)
- There are 8 periods per day
- The existing `scheduale-list` permission applies to print views as well
- Print views use standalone Blade HTML (no layout extension) with inline CSS, following the `exchange_bond/print.blade.php` pattern

## Clarifications

### Session 2026-07-10

- Q: What happens when "Auto Generate" is clicked without first clearing? → A: Auto-generate clears all existing entries automatically before regenerating.
- Q: What happens if a teacher has no grades assigned? → A: Skip the teacher silently — they receive no lessons.

## Out of Scope

- Modifying the schedules database schema
- Adding new teacher or class management features
- Supporting different period counts per day
- Supporting different working days per week (e.g., 5-day weeks)
- Exporting schedules to PDF or other file formats
- Bulk printing (printing all teachers/classrooms/grades at once)
