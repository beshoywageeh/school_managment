# Research: Schedule Enhancement

## Decision 1: Auto-Distribution Algorithm

**Decision:** Iterate `periods → days → teachers` instead of `days → periods → teachers`.

**Rationale:** The current algorithm fills Saturday completely before moving to Sunday, causing uneven day distribution. By iterating periods first, then days, each teacher gets spread across all days before any day is fully occupied.

**Alternatives considered:**
- Random assignment: Rejected — non-deterministic, harder to debug and verify
- Greedy per-teacher (assign all of teacher A, then all of teacher B): Rejected — first teachers get best slots, later teachers get leftovers

## Decision 2: Print View Approach

**Decision:** Create standalone Blade views (no Livewire) with inline styles, following the pattern in `resources/views/backend/exchange_bond/print.blade.php`.

**Rationale:** The exchange_bond print view is a proven pattern in this codebase — standalone HTML with `@page` CSS, `@media print` rules, a `.no-print` button area, and `window.print()`. Print views are stateless reads, no need for Livewire overhead.

**Alternatives considered:**
- Livewire components for print: Rejected — unnecessary overhead for read-only views
- PDF generation: Rejected — out of scope per spec
- Using `layouts/invoice_view.blade.php`: Rejected — too invoice-specific, better to follow the simpler exchange_bond pattern

## Decision 3: Grade Model Relationship

**Decision:** Add a `classes()` HasMany relationship to the `Grade` model, or query `classes::where('grade_id', $gradeId)` directly.

**Rationale:** The `Grade` model currently has no `classes()` relationship. The `classes` model has `grade_id` FK. Either add the relationship (cleaner) or query directly (less invasive). Recommendation: add the relationship since it's a natural one-to-many.

**Alternatives considered:**
- Eager-load through ClassRoom: Rejected — `classes` links directly to `Grade` via `grade_id`, not through ClassRoom

## Decision 4: Print Route Authentication

**Decision:** Apply the same `permission:scheduale-list` middleware to print routes.

**Rationale:** The existing `schedulesController` uses this permission. Print views show the same data, so the same access control applies. Note the existing typo "scheduale" must be preserved for consistency.

## Decision 5: Translation Keys

**Decision:** Add new keys to existing `lang/en/schedules.php` and `lang/ar/schedules.php` files.

**Rationale:** All schedule-related translations live in these files. New print-related keys should follow the same pattern.

**Keys to add:**
- `select_teacher`, `select_class`, `select_grade`
- `print_teacher`, `print_classroom`, `print_grade`
- `teacher_schedule`, `classroom_schedule`, `grade_schedule`
