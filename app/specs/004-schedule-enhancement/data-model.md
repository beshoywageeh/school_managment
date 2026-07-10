# Data Model: Schedule Enhancement

## Entities

### Teacher (User)
- Already exists in `users` table
- Relevant fields: `id`, `name`, `type` (1 = teacher), `job_id`, `lesson_count`
- Relationship: `grades()` BelongsToMany via `teacher_grade` pivot
- Relationship: `job()` BelongsTo Job

### Class
- Already exists in `classes` table
- Relevant fields: `id`, `title`, `grade_id`, `class_room_id`
- Relationship: `grade()` BelongsTo Grade
- Relationship: `class_room()` BelongsTo ClassRoom

### Grade
- Already exists in `grades` table
- Relevant fields: `id`, `name`
- **NEW relationship needed:** `classes()` HasMany Class (via `grade_id`)

### Schedule Entry
- Already exists in `schedules` table
- Fields: `id`, `user_id`, `class_id`, `job_id`, `day` (enum), `period` (string 1-8)
- Relationship: `teacher()` BelongsTo User
- Relationship: `section()` BelongsTo classes (note: method name is `section()` but accessed as `->class` in views — this is a known inconsistency)

## No Schema Changes Required

The existing `schedules` table structure is sufficient for all requirements. No new tables, columns, or migrations needed.

## Relationships Diagram

```
User (teacher) --1:N--> schedules
Grade --1:N--> classes
Grade --M:N--> User (via teacher_grade pivot)
classes --1:N--> schedules
```
