# Tasks: Dashboard Redesign

**Input**: Design documents from `app/specs/001-dashboard-redesign/`
**Prerequisites**: plan.md (required), spec.md (required for user stories), research.md, data-model.md, contracts/api-dashboard-widgets.md, quickstart.md

**Tests**: Test tasks included as requested in plan.md (K1).

**Organization**: Tasks grouped by user story. ~80% of spec already implemented; tasks focus on remaining gaps.

---

## Phase 1: Core Dashboard Features (US1 — Role-Aware Dashboard)

**Goal**: Complete the role-aware dashboard with reusable stat card component, accountant role support, real trend data, mobile quick-action scroll, and chart resize on sidebar toggle.

**Covers spec scenarios**: 2.1 (Accountant Dashboard), 2.2 (Admin Dashboard Experience), 2.3 (Teacher Dashboard), spec reqs DH-1, DH-2, DH-5, DH-7, DH-9

**Independent Test**: Log in as admin, teacher, and accountant; verify each role sees correct stat cards, quick actions, and chart. Verify sparkline/trend data is non-null on admin dashboard.

- [X] T001 [P] [US1] Extract `<x-stat-card>` Blade component from inline Alpine template in `resources/views/dashboard.blade.php` (lines 30-51) into new `resources/views/components/stat-card.blade.php` — props: color, trend, trendDirection, sparklineData, sparklineColor; render 30px SVG sparkline when sparklineData provided, trend indicator (▲/▼) when trend provided
- [X] T002 [P] [US1] Create `resources/views/components/stat-card.blade.php` with 30px SVG sparkline renderer using `<svg>` viewBox; accept `number[]` sparklineData (up to 12 values), map to polyline points; default to `sparklineColor` or theme color
- [X] T003 [US1] Replace inline stat card markup in `resources/views/dashboard.blade.php` with `<x-stat-card>` component (update Alpine template to use the component)
- [X] T004 [P] [US1] Add accountant role branching in `app/Http/Controllers/HomeController.php` method `widgets()` — detect `$user->hasRole('Accountant')`, return fee-centric stat cards (invoiced amount, collected amount, pending balance, overdue count) + accounting quick actions (New Invoice, Create Receipt, Fee Exceptions, Payment Plans) + hide student chart, show only accounting bar chart
- [X] T005 [P] [US1] Add accountant role filtering in `app/Http/Controllers/HomeController.php` method `widgets()` — filter recentActivity to financial entries only for accountant role
- [X] T006 [P] [US1] Wire real month-over-month trend data in `app/Http/Controllers/HomeController.php` — calculate MoM percentage changes in `getFinancialData()` for each stat card metric; return `trend` (e.g., "+12%"), `trendDirection` ("up"/"down"), `sparklineData` (number[] of up to 12 monthly values)
- [X] T007 [US1] Generate sparkline data arrays in `app/Http/Controllers/HomeController.php` — use existing `getMonthlyRevenueTrend()` pattern to build 12-month aggregates for each stat metric; pass as `sparklineData` in API response
- [X] T008 [P] [US1] Make quick actions horizontally scrollable on mobile in `resources/views/dashboard.blade.php` — change wrapper from `flex flex-wrap gap-4` to `flex overflow-x-auto gap-4`
- [X] T009 [US1] Implement chart resize on sidebar toggle in `resources/views/dashboard.blade.php` — add `$watch('sidebarExpanded')` in Alpine dashboard component to call `this.studentChart?.resize()` and `this.revenueChart?.resize()` after 300ms sidebar transition
- [X] T010 [P] [US1] Add teacher role branching in `app/Http/Controllers/HomeController.php` method `widgets()` — detect `$user->hasRole('Teacher')`; return teacher-specific stat cards (class rosters count using existing `getUserRoleCounts()` student count, today's schedule count from schedule table, pending tasks count)
- [X] T011 [P] [US1] Add teacher-specific quick actions in `app/Http/Controllers/HomeController.php` method `widgets()` — return My Classes (`classes.index`), Take Attendance, Grade Entry for teacher role
- [X] T012 [US1] Hide financial data for teacher role in `app/Http/Controllers/HomeController.php` — exclude revenue chart and financial stat cards from teacher response; filter quick actions to teaching-related items only

**Checkpoint**: Role-aware dashboard complete with stat-card component, all 3 roles (admin, teacher, accountant), real trend/sparkline data, mobile scroll, and chart resize.

---

## Phase 2: Sidebar Refinements (US2 — Sidebar Interaction)

**Goal**: Complete the collapsible sidebar with icon tooltips and tidy stores sub-menu structure.

**Covers spec scenarios**: 2.4 (Sidebar Interaction), 2.5 (Sidebar Pinning), 2.6 (Mobile Sidebar), spec reqs SB-9

**Independent Test**: Collapse sidebar (unpin), hover each nav icon — tooltip shows label. Expand sidebar, search filter works on stores sub-menu items.

- [X] T013 [P] [US2] Add `:title` attribute tooltips to icon-only nav items in `resources/views/layouts/sidebar.blade.php` — add `:title="'{{ trans($item['labelKey']) }}'"` to each nav `<a>` tag (applies to all section items)
- [X] T014 [P] [US2] Add `:title` attribute to sub-menu toggle buttons in `resources/views/layouts/sidebar.blade.php` — add `:title="'{{ trans('Sidebar.stocks') }}'"` (and clothes/books equivalents) to the three collapsible section buttons
- [X] T015 [US2] Tidy stores sub-menu section in `resources/views/layouts/sidebar.blade.php` — extract Stocks/Clothes/Books collapsible sub-menus into a Blade `@include` partial at `resources/views/components/stores-submenu.blade.php`; ensure `x-show="!search || ..."` filter applies to sub-menu items correctly

**Checkpoint**: All sidebar items show tooltips when collapsed. Stores section extracted with working search filter.

---

## Phase 3: Component Standardization (US3 — UI Consistency)

**Goal**: Standardize UI components across all backend views — full-screen mobile modals, card/heading consistency, form input audit, mobile table scroll, smart-table skeleton verification.

**Covers spec scenarios**: 2.7 (Component Consistency — CRUD Modal), 2.8 (Table Loading State), spec reqs VF-2, VF-3, CS-2, MR-2, MR-3, CS-1

**Independent Test**: Open any CRUD modal on mobile — it's full-screen. All backend views use consistent card classes and heading hierarchy. No raw `<input>` elements remain.

- [X] T016 [US3] Add full-screen mobile modal variant in `resources/views/components/modal.blade.php` — add classes `lg:max-w-lg max-w-full m-0 h-full lg:h-auto rounded-none lg:rounded-xl`; use `lg` breakpoint consistent with sidebar behavior
- [X] T017 [US3] Audit card standardization across backend views under `resources/views/backend/` — search for card/container classes; replace non-standard classes with `bg-white rounded-xl border border-gray-100 shadow-sm p-6` — **priority**: list/index pages first (highest visibility), then CRUD form pages, then utility views
- [X] T018 [US3] Audit heading hierarchy across backend views — ensure h1=`text-2xl font-bold`, h2=`text-xl font-bold`, h3=`text-lg font-bold` consistently used — **priority**: same as T017 (index → form → utility)
- [X] T019 [US3] Search and replace raw `<input>` elements across `resources/views/backend/` — replace with `<x-input>` component; ensure label → input → error → hint ordering — **priority**: CRUD create/edit pages first, then filter/search inputs
- [X] T020 [P] [US3] Search and replace raw `<select>` elements across `resources/views/backend/` — replace with `<x-select>` component — **priority**: filter/search selects first, then CRUD form selects
- [X] T021 [P] [US3] Search and replace raw `<textarea>` elements across `resources/views/backend/` — replace with `<x-textarea>` component — **priority**: CRUD create/edit forms first
- [X] T022 [US3] Audit tables in `resources/views/backend/` for `overflow-x-auto` wrapper — add `overflow-x-auto` wrapper to tables that lack it for mobile horizontal scroll — **priority**: index/list tables first, then any table in CRUD show/edit pages
- [X] T023 [US3] Verify smart-table loading skeleton across all instances — ensure all `<x-smart-table>` usages pass correct `loading` prop and skeleton renders 5 animated pulse rows — **priority**: spot-check all smart-table instances; no order needed

**Checkpoint**: All backend views use standardized components. Mobile modals full-screen. Form elements consistent.

---

## Phase 3b: Tailwind Design Consistency (US3 — VF-4, VF-5)

**Goal**: Standardize button and input styling across all backend views following consistent Tailwind utility patterns.

**Covers spec reqs**: VF-4 (button standardization), VF-5 (input Tailwind styling)

**Independent Test**: All buttons across backend views use one of three class patterns (primary/secondary/danger). All inputs use `rounded-lg border-gray-300 focus:ring-primary`.

- [ ] T033 [US3] Audit button standardization across `resources/views/backend/` — search for all `<button>`, `<a>` with button classes, and `<x-button>` usage; replace non-standard classes with primary (`px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium`), secondary (`px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium`), or danger (`px-4 py-2 bg-danger text-white rounded-lg text-sm font-medium`) patterns — **priority**: CRUD action buttons first, then filter/submit, then table action buttons
- [ ] T034 [US3] Audit input field Tailwind class consistency across `resources/views/backend/` — ensure all `<x-input>`, `<x-select>`, `<x-textarea>` components use `w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary`; add missing classes where component defaults lack them — **priority**: CRUD forms first, then filter/search forms

**Checkpoint**: All buttons use standardized Tailwind class patterns. All inputs have consistent focus ring, border radius, and sizing.

---

## Phase 4: Verification & Testing

**Goal**: Validate the entire feature works end-to-end with automated tests and manual quickstart scenarios.

**Covers**: Success criteria from spec.md §4, quickstart.md validation guide

**Independent Test**: `php artisan test --compact --filter=DashboardRedesign` passes.

- [X] T024 [P] Create `tests/Feature/DashboardRedesignTest.php` using `php artisan make:test DashboardRedesignTest --phpunit` — test dashboard API endpoint returns 200 for authenticated users
- [X] T025 [P] Add test for role-based widget response in `tests/Feature/DashboardRedesignTest.php` — create admin user, call `GET /api/dashboard/widgets`, assert response contains expected statCards (4 cards with label/value/icon/trend/sparklineData), quickActions (6+ items), charts (studentChart + revenueTrend), recentActivity (5 entries)
- [X] T026 [P] Add test for accountant role widget response in `tests/Feature/DashboardRedesignTest.php` — create accountant user (or role), verify statCards show fee-centric data, quickActions show accounting links, studentChart absent, recentActivity filtered
- [X] T027 [P] Add test for teacher role widget response in `tests/Feature/DashboardRedesignTest.php` — create teacher user, verify no financial KPIs, teaching-specific stat cards and quick actions
- [X] T028 [P] Add test for unauthenticated access in `tests/Feature/DashboardRedesignTest.php` — verify `GET /api/dashboard/widgets` returns 401 for guest users
- [ ] T029 Validate sidebar tooltips manually per `quickstart.md` §3 — collapse sidebar, hover each nav icon, verify tooltip displays label
- [ ] T030 Validate mobile modal full-screen per `quickstart.md` §8 — open CRUD modal at mobile width, verify full-screen layout
- [ ] T031 Validate chart resize per `quickstart.md` §6 — toggle sidebar, verify charts re-render without gaps
- [X] T032 Run `vendor/bin/pint --format agent` to format all modified files

**Checkpoint**: All tests pass. Manual validation scenarios succeed.

---

## Dependencies & Execution Order

### Phase Dependencies

| Phase | Depends On | Description |
|-------|-----------|-------------|
| Phase 1 (US1) | Nothing | Can start immediately |
| Phase 2 (US2) | Nothing | Independent of US1 — can run in parallel |
| Phase 3 (US3) | Nothing | Independent of US1/US2 — can run in parallel |
| Phase 3b (Tailwind) | Nothing | Independent of Phases 1-3 — can run in parallel |
| Phase 4 (Tests) | Phases 1-3 | Must wait for feature implementation |

### Task Dependencies Within Phases

**Phase 1**:
- T003 depends on T001, T002 (stat-card component must exist before use in dashboard)
- T007 depends on T006 (sparkline generation needs trend calculation first)
- T009 depends on T003 (chart resize references the dashboard after stat-card refactor)
- All [P] tasks can run in parallel

**Phase 2**: T013, T014 can run in parallel. T015 depends on understanding the structure.

**Phase 3**: T017, T018, T019, T020, T021, T022, T023 are independent audits — can run in parallel.

**Phase 4**: T024, T025, T026, T027, T028 can run in parallel. T029-T032 are manual/formatting steps.

### Parallel Opportunities

```bash
# Phase 1 parallel batch (all [P] tasks):
Task: "T001: Create stat-card component"
Task: "T002: Add SVG sparkline to stat-card"
Task: "T004: Add accountant role branch"
Task: "T005: Filter accountant activity"
Task: "T006: Calculate MoM trend data"
Task: "T008: Mobile quick-action scroll"
Task: "T010: Add teacher role branching"
Task: "T011: Add teacher quick actions"

# Phase 1 sequential after parallel batch:
Task: "T003: Replace inline stat cards with component"
Task: "T007: Generate sparkline arrays"
Task: "T009: Chart resize watcher"

# Phase 2 parallel:
Task: "T013: Nav item tooltips"
Task: "T014: Sub-menu tooltips"

# Phase 3 parallel:
Task: "T016 through T023" (all independent)

# Phase 3b parallel:
Task: "T033: Button standardization audit"
Task: "T034: Input Tailwind class audit"

# Phase 4 parallel:
Task: "T024 through T028" (all tests independent)
```

---

## Implementation Strategy

### MVP (Phase 1 Only)

1. Complete Phase 1 tasks — stat card component + accountant role + trend data
2. **STOP and validate**: Log in as admin, teacher, accountant — verify each sees correct dashboard
3. Deploy/demo — core feature complete

### Incremental Delivery

1. **Phase 1** → Role-aware dashboard with stats, trends, all 3 roles — demo ready
2. **Phase 2** → Sidebar tooltips and stores cleanup — UX polish
3. **Phase 3** → Consistent components across all views — visual polish
4. **Phase 4** → Automated test coverage — quality gate

### Single Developer Strategy

- Complete Phase 1 in task order (parallel tasks reduce iterations)
- Move to Phase 2, then Phase 3 (both independent of Phase 1)
- Finish with Phase 4 (tests + validation)

---

## Total Task Count: 34

| Phase | Tasks | [P] (Parallel) |
|-------|-------|-----------------|
| Phase 1: Core Dashboard Features (US1) | T001–T012 (12 tasks) | 8 |
| Phase 2: Sidebar Refinements (US2) | T013–T015 (3 tasks) | 2 |
| Phase 3: Component Standardization (US3) | T016–T023 (8 tasks) | 8 |
| Phase 3b: Tailwind Design Consistency | T033–T034 (2 tasks) | 2 |
| Phase 4: Verification & Testing | T024–T032 (9 tasks) | 5 |
