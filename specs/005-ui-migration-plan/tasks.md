---

description: "Task list for UI Redesign & Migration"
---

# Tasks: UI Redesign & Migration

**Input**: Design documents from `specs/005-ui-migration-plan/`
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, contracts/

**Tests**: Test tasks are included — the spec requires Livewire component tests for behavior plus manual QA per phase.

**Organization**: Tasks are grouped by user story to enable independent implementation and testing of each story.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

## Path Conventions

- **Laravel app**: `app/Http/Livewire/Components/`, `resources/views/`, `resources/css/`, `resources/js/`
- **Tests**: `tests/Feature/Livewire/Components/`
- Adjust paths for existing module locations

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Configure Tailwind design tokens, verify tooling, and establish the base RTL CSS foundation

- [ ] T001 Add any missing theme tokens to `@theme` block in `resources/css/app.css` (check `--shadow-card-hover`; most tokens already exist — see data-model.md)
- [ ] T002 [P] Configure RTL Arabic font loading (Cairo via Bunny Fonts — already configured in app.css)
- [ ] T003 [P] Verify `@tailwindcss/vite` plugin in `vite.config.js` processes updated `app.css` with no errors on `npm run build`
- [ ] T004 [P] Add `rtl:` and `inset-inline-*` Tailwind utility documentation comment in app.css for team reference (already present)

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Core infrastructure that MUST be complete before ANY user story can be implemented

**⚠️ CRITICAL**: No user story work can begin until this phase is complete

- [ ] T005 Create base layout `resources/views/layouts/app.blade.php` with three-region shell (sidebar, topbar, content) using `<html lang="ar" dir="rtl">` and `@vite` for CSS/JS
- [ ] T006 [P] Create sidebar partial `resources/views/layouts/partials/sidebar.blade.php` with collapsible nav groups, active-route highlighting (`border-r-2` + tinted background), and independent scroll
- [ ] T007 [P] Create topbar partial `resources/views/layouts/partials/topbar.blade.php` with module title, action button area, and utility cluster (user name, notifications, help)
- [ ] T008 [P] Create the Sidebar Livewire component at `app/Http/Livewire/Components/Navigation/Sidebar.php` with `navGroups` prop and collapsible `open` state
- [ ] T009 [P] Create the Topbar Livewire component at `app/Http/Livewire/Components/Navigation/Topbar.php` with `moduleTitle` and `brandColor` props
- [ ] T010 [P] Create `resources/views/livewire/navigation/sidebar.blade.php` view for the Sidebar component
- [ ] T011 [P] Create `resources/views/livewire/navigation/topbar.blade.php` view for the Topbar component
- [ ] T012 [P] Integrate `@alpinejs/collapse` plugin (or use `x-transition` fallback) for sidebar group collapse animations in `resources/js/app.js`
- [ ] T013 [P] Add Alpine sidebar toggle state (`sidebarOpen`) to the base layout for mobile drawer behavior

**Checkpoint**: Foundation ready — layout shell renders with RTL sidebar + topbar; user story implementation can begin

### Role-Based UI Infrastructure

- [ ] T013b [P] Define role/permission schema: audit `spatie/laravel-permission` setup, document available roles (Admin, Teacher, Accountant, etc.) and their module permissions
- [ ] T013c [P] Create a `PermissionsService` or helper that returns the current user's visible modules, nav groups, and widget permissions — used by Sidebar, Topbar, and Dashboard components
- [ ] T013d [P] Design sidebar navigation data structure with `permission` keys per item/group (array of `{key, icon, label, items: [{label, url, route, permission?}], permission?}`)

### Accessibility Baseline

- [ ] T013e [P] Document skip-to-content link: add `#main-content` anchor in layout, visible on focus via Tailwind `sr-only focus:not-sr-only`
- [ ] T013f [P] Verify color contrast ratios for all component variants against WCAG 2.1 AA (4.5:1 for normal text, 3:1 for large text) — document any violations

### Audit for Livewire Compatibility

- [ ] T013g [P] Audit existing controllers for PoC migration pages (treasuries, bank accounts) — wrap query logic in Service classes where missing, ensure Livewire-compatible data access

---

## Phase 3: User Story 1 — Modern, Consistent ERP Interface Across All Modules (Priority: P1) 🎯 MVP

**Goal**: A reusable Blade component library (card, button, status-badge, modal, tabs) that every page composes, plus the settings hub grid page template.

**Independent Test**: A user can visit 3 different module pages and identify the same sidebar + topbar + content pattern on all three.

### Tests for User Story 1

> **NOTE: These tests already exist** at `tests/Feature/Ui/ComponentRenderTest.php`, `tests/Feature/Ui/SettingsHubTest.php`, and `tests/Feature/Ui/LayoutShellTest.php`. Verify they pass after component enhancements; add new tests for role-filtered navigation.

- [ ] T014 [P] [US1] **Already exists** — `ComponentRenderTest.php` covers card, button, status-badge, data-table, modal, tabs rendering. Add ARIA assertion assertions (e.g., `assertSee('role="dialog"')`).
- [ ] T015 [P] [US1] **Already exists** — `SettingsHubTest.php` covers settings hub card grid, responsive classes, example file existence.
- [ ] T016 [P] [US1] **Already exists** — `LayoutShellTest.php` covers RTL direction.
- [ ] T017 [P] [US1] Add Sidebar role-filtering test — create `tests/Feature/Livewire/Components/SidebarRoleTest.php` — verify Admin sees all nav groups, Accountant sees only financial, Teacher sees only teaching

### Implementation for User Story 1

- [ ] T018 [P] [US1] **Already exists** — `x-ui.card` at `resources/views/components/ui/card.blade.php`. Verify ARIA props, add `aria-current="page"` for active.
- [ ] T019 [P] [US1] **Already exists** — `x-ui.button`. Verify `aria-disabled`, `aria-label`, focus ring classes.
- [ ] T020 [P] [US1] **Already exists** — `x-ui.status-badge`. Verify `role="status"`, `aria-label`.
- [ ] T021 [P] [US1] **Already exists** — `x-ui.modal`. Verify `x-trap.noscroll`, `aria-modal`, `aria-labelledby`.
- [ ] T022 [P] [US1] Create the Sidebar Livewire component at `app/Livewire/Components/Navigation/Sidebar.php` with role-filtered nav groups, collapsible state, active route highlighting
- [ ] T023 [P] [US1] Create sidebar view at `resources/views/livewire/navigation/sidebar.blade.php` with ARIA roles, keyboard nav, role-filtered rendering
- [ ] T024 [P] [US1] Create the Topbar Livewire component at `app/Livewire/Components/Navigation/Topbar.php` with `moduleTitle`, `brandColor`, user info
- [ ] T025 [P] [US1] Create topbar view at `resources/views/livewire/navigation/topbar.blade.php`
- [ ] T026 [US1] Ensure `backend/ui-examples/settings/index.blade.php` exists (test expects it) — settings hub example page
- [ ] T027 [US1] Migrate one existing settings/hub page to use the new layout + card grid as proof of concept
- [ ] T028 [US1] Run accessibility audit: verify keyboard navigation through sidebar, tab order, focus indicators, screen reader announcements

**Checkpoint**: US1 fully functional — existing component tests pass (with a11y assertions), sidebar role-filtering works, settings hub example renders, manual QA visual checklist passes, existing test suite shows zero regressions.

---

## Phase 4: User Story 2 — Fast, No-Reload Data Tables for Listing Pages (Priority: P1)

**Goal**: Enhance existing Alpine-driven DataTable with Livewire event-driven data fetching, enabling server-side sort, filter, paginate — no full page reloads.

**Hybrid approach**: Keep existing `x-data="dataTable()"` Alpine presentation layer (`resources/views/components/ui/data-table.blade.php`). Create companion Livewire component for server-side data. See `contracts/data-table.md`.

**Independent Test**: A user can navigate page 1→2, sort a column asc/desc, apply a filter — all without a full-page reload.

### Tests for User Story 2

> **NOTE: `ComponentRenderTest.php` already tests DataTable rendering. Add Livewire driver tests.**

- [ ] T029 [P] [US2] **Already exists** — `ComponentRenderTest.php::test_data_table_component_renders_with_columns`. Update to test Livewire-driven data flow.
- [ ] T030 [P] [US2] Create DataTable Livewire driver test in `tests/Feature/Livewire/Components/DataTableDriverTest.php` — test Livewire companion fetches sorted/filtered/paginated data, emits events to Alpine
- [ ] T031 [P] [US2] Create DataTable accessibility test — test `aria-sort` on sortable columns, `aria-rowindex` on rows, keyboard sort activation (Enter key), pagination ARIA labels

### Implementation for User Story 2

- [ ] T032 [P] [US2] Create the DataTable Livewire companion at `app/Livewire/Components/Table/DataTable.php` with model, columns, filters, perPage props; sortKey/sortDir/filterValues/page state; fetchData/sortBy/applyFilters/nextPage/prevPage/performAction methods — outputs JSON via `$this->dispatch('table-data', ...)` to Alpine
- [ ] T033 [P] [US2] Enhance existing `resources/views/components/ui/data-table.blade.php` — add `x-on:table-data-{name}.window` listener to receive Livewire data, update Alpine `dataTable()` state, add `aria-sort` and ARIA row attributes
- [ ] T034 [P] [US2] Create filter panel partial with search input, select filters, and "بحث" + "إعادة تعيين" action buttons — wires to Livewire event `dispatch('livewire-table-{name}-filter', ...)`
- [ ] T035 [P] [US2] Create `page-header` and `filter-panel` integration with DataTable — ensure existing components at `resources/views/components/ui/page-header.blade.php` and `filter-panel.blade.php` dispatch Livewire events
- [ ] T036 [P] [US2] Add role-gated column visibility to DataTable — columns with `permission` prop only render if user has permission
- [ ] T037 [US2] Ensure `backend/ui-examples/list/index.blade.php` exists (test expects it) — list page example with DataTable, filter panel, page header, modal
- [ ] T038 [US2] Migrate one existing list/index page (e.g., treasuries list) to use the new layout + DataTable hybrid component as proof of concept
- [ ] T039 [US2] Verify DataTable accessibility: keyboard sort (Enter on headers), focus management, ARIA live regions for loading/empty/error states

**Checkpoint**: DataTable works with Livewire hybrid — sort, filter, paginate all no-reload via Livewire events. ARIA attributes on sortable headers, pagination, and states. Role-gated columns work. Existing test suite shows zero regressions.

---

## Phase 5: User Story 3 — Single-Page Detail Views with Tabbed Content (Priority: P2)

**Goal**: Record detail pages with header (name, balance, status, actions) + tabbed sections that load on demand.

**Existing components**: `detail-header.blade.php`, `tabs.blade.php`, `status-badge.blade.php`, `button.blade.php` already exist.

**Independent Test**: A user can open a record detail page, see the header + action toolbar, click through 3 tabs, and see each tab's content load without a full page reload.

### Tests for User Story 3

> **NOTE: `DetailPageTest.php` already tests detail header rendering and example file existence. Add tab keyboard nav tests.**

- [ ] T040 [P] [US3] **Already exists** — `DetailPageTest.php` covers detail-header render, example file existence, component usage assertions.
- [ ] T041 [P] [US3] Create tab accessibility test — test Arrow Left/Right keyboard navigation between tabs, `aria-selected`, `aria-controls` correctness
- [ ] T042 [P] [US3] Create role-based detail page test — verify action buttons differ per role (Admin sees delete, Teacher may not)

### Implementation for User Story 3

- [ ] T043 [P] [US3] Enhance existing `x-ui.detail-header` — verify ARIA roles, `aria-label` on status badge, action toolbar keyboard accessibility
- [ ] T044 [P] [US3] Enhance existing `x-ui.tabs` — verify `role="tablist"`, keyboard Arrow Left/Right, `aria-selected`, `aria-controls`, `aria-labelledby` on panels, on-demand loading (`loadedTabs` tracking)
- [ ] T045 [US3] Ensure `backend/ui-examples/detail/index.blade.php` exists (test expects it) — detail page example with detail-header, tabs, DataTable
- [ ] T046 [US3] Create a statement tab — embed DataTable hybrid for transaction listing with filter/date range
- [ ] T047 [US3] Migrate one existing detail page (e.g., bank account detail) to use new layout + tabs + statement DataTable as proof of concept
- [ ] T048 [US3] Verify tab keyboard navigation end-to-end: focus moves with Arrow keys, tabpanel receives focus on activation, Escape does not close (tabs are navigation, not modals)

**Checkpoint**: Detail pages with tabbed on-demand content work independently. Tabs fully keyboard-accessible. Record header + toolbar + status badge render correctly with ARIA. Existing test suite shows zero regressions.

---

## Phase 6: User Story 4 — Mobile-Responsive Experience (Priority: P2)

**Goal**: All pages adapt to mobile viewports — sidebar becomes overlay drawer, tables scroll horizontally, cards stack vertically.

**Existing**: Base layout `app.blade.php` already has `sidebarMobileOpen` state, backdrop overlay (`x-teleport`), and `lg:ms-64`/`lg:ms-16` sidebar transitions.

**Independent Test**: On a 375px-wide viewport, all pages render without horizontal scrolling, all text readable, sidebar toggles as overlay drawer.

### Tests for User Story 4

- [ ] T049 [P] [US4] Create mobile sidebar test — verify `sidebarMobileOpen` toggles, backdrop renders, hamburger button has correct `aria-label` (open/closed states)
- [ ] T050 [P] [US4] Create table horizontal scroll test — verify table container has `overflow-x-auto` at mobile breakpoint

### Implementation for User Story 4

- [ ] T051 [P] [US4] Add hamburger toggle `aria-label="فتح القائمة"`/`"إغلاق القائمة"` and `aria-expanded` to topbar — wired to existing `sidebarMobileOpen` Alpine state
- [ ] T052 [P] [US4] Add horizontal scroll wrapper to DataTable for mobile — verify `overflow-x-auto` on table container
- [ ] T053 [P] [US4] Verify all card grids use responsive columns (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`)
- [ ] T054 [P] [US4] Verify all modals use responsive max-width at mobile
- [ ] T055 [US4] Test and fix all migrated pages at 375px breakpoint — sidebar, tables, forms, cards — verify no content cut off, no horizontal page scroll
- [ ] T056 [US4] Verify mobile sidebar accessibility: focus moves into sidebar when opened, focus returns to hamburger when closed, Escape closes drawer

**Checkpoint**: Mobile experience is functional — responsive breakpoints work; sidebar toggles with accessible hamburger button; tables scroll horizontally; focus management works. Existing test suite shows zero regressions.

---

## Phase 7: User Story 5 — Single-Action Record Status Changes (Priority: P3)

**Goal**: Inline row action buttons in DataTable that update record status without page reload.

**Independent Test**: A user clicks an inline "مطابقة" button on any row, and the row's status badge updates immediately.

### Tests for User Story 5

- [ ] T057 [P] [US5] Create inline action test — verify `performAction()` calls Livewire, updates row in UI, handles error gracefully, shows loading state on the specific row
- [ ] T058 [P] [US5] Create role-gated action test — verify Admin sees all actions, Accountant sees only financial actions, Teacher sees only teaching actions

### Implementation for User Story 5

- [ ] T059 [P] [US5] Add `performAction($id, $action)` method to DataTable Livewire companion — validates action against user roles, calls model method, emits updated row data to Alpine
- [ ] T060 [P] [US5] Create inline action Blade partial for row action buttons (primary action + kebab menu) — role-gated, with `aria-label` on each action button
- [ ] T061 [P] [US5] Add row-level loading state: when action is in progress, show spinner on that row only (`wire:target:row-{id}` or Alpine `x-loading`)
- [ ] T062 [US5] Migrate one reconciliation workflow (e.g., statement matching) to use inline actions with role filtering
- [ ] T063 [US5] Verify inline action accessibility: buttons have distinct `aria-label`, success/error announced via `aria-live` region, focus stays on the action button after completion

**Checkpoint**: Inline row actions work with role gating — one-click status updates without page reload. Actions are keyboard-accessible and screen-reader-friendly. Existing test suite shows zero regressions.

---

## Phase 8: Polish & Cross-Cutting Concerns

**Purpose**: QA pass, legacy cleanup, final accessibility audit, and verification

- [ ] T064 [P] Migrate remaining settings hub pages to use the card grid pattern (manufacturing settings, etc.)
- [ ] T065 [P] Migrate remaining list/index pages (bank accounts, customers, suppliers, etc.) to use DataTable hybrid component
- [ ] T066 [P] Migrate remaining detail/record pages to use tabs + record header pattern
- [ ] T067 [P] Add inline row actions to remaining applicable tables with role gating
- [ ] T068 [P] Create `x-ui.kpi-tile` (already exists) + ChartWidget Livewire component at `app/Livewire/Components/Dashboard/ChartWidget.php` using ApexCharts
- [ ] T069 [P] Build the dashboard page — KPI row + donut chart + line chart + latest-records DataTable — with role-aware widgets per DashboardRedesignTest.php
- [ ] T070 [P] Ensure `backend/ui-examples/dashboard/index.blade.php` exists (test expects it) — dashboard example page
- [ ] T071 [P] Implement Livewire session expiry handling — catch 401/419 in Livewire lifecycle hooks, show toast "انتهت الجلسة" via existing Alpine toast store, redirect to /login after 2s
- [ ] T072 [P] Run comprehensive accessibility audit:
  - Test all pages with keyboard-only navigation (no mouse)
  - Test with screen reader (NVDA or VoiceOver) on migrated pages
  - Verify color contrast ratios (WCAG 2.1 AA: 4.5:1 normal text, 3:1 large)
  - Verify focus order follows visual order (DOM order)
  - Test zoom to 200% — no content loss or horizontal scroll
  - Add skip-to-content link verification
- [ ] T073 [P] Run manual QA visual checklist against 4 reference screenshots (settings hub, dashboard, treasury list, account statement)
- [ ] T074 [P] Remove Bootstrap CSS/JS references from base layout and `vite.config.js`
- [ ] T075 [P] Remove jQuery plugin includes replaced by Alpine equivalents
- [ ] T076 [P] Delete now-unused old Blade partials after confirming all pages migrated
- [ ] T077 [P] Run `npm run build` and confirm final CSS bundle size is smaller post-Bootstrap removal
- [ ] T078 Run `vendor/bin/pint --format agent` across all new files
- [ ] T079 Run full test suite: `php artisan test --compact` — verify zero regressions
- [ ] T080 Run quickstart.md validation scenarios end-to-end

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup completion — BLOCKS all user stories
- **User Stories (Phase 3+)**: All depend on Foundational phase completion
  - US1 → US2 (US2 DataTable depends on US1 button/status-badge for row actions and status display)
  - US2 → US3 (US3 tabs embed DataTable for statement tab)
  - US2 → US5 (US5 inline actions are a feature of DataTable)
  - US4 can run in parallel with US3/US5 (responsive layout changes are additive)
  - US1, US2, US3, US5 can run sequentially in priority order

### User Story Dependencies

- **User Story 1 (P1)**: Component library foundation; no dependencies on other stories
- **User Story 2 (P1)**: Depends on US1 (uses x-ui.button, x-ui.status-badge in table rows)
- **User Story 3 (P2)**: Depends on US1 + US2 (uses DataTable in tabs)
- **User Story 4 (P2)**: No code dependency on other stories (additive responsive wrappers)
- **User Story 5 (P3)**: Depends on US2 (inline actions are DataTable feature)

### Within Each User Story

- Tests MUST be written and FAIL before implementation
- Blade components before Livewire components
- Livewire components before page integration
- Core component before migration of real pages
- Story complete before moving to next priority

### Parallel Opportunities

- All Setup tasks marked [P] can run in parallel
- All Foundational tasks marked [P] can run in parallel
- US4 (mobile responsive) can run in parallel with US3 and US5
- Within each story, all [P] tasks can run in parallel
- Polish phase [P] tasks can run in parallel

---

## Parallel Example: User Story 1

```bash
# Launch all tests for User Story 1 together:
Task: "T014 [P] [US1] SidebarTest.php"
Task: "T015 [P] [US1] CardTest.php"
Task: "T016 [P] [US1] ModalTest.php"
Task: "T017 [P] [US1] TabsTest.php"

# Launch all implementation tasks for User Story 1 together:
Task: "T018 [P] [US1] x-ui.card component"
Task: "T019 [P] [US1] x-ui.button component"
Task: "T020 [P] [US1] x-ui.status-badge component"
Task: "T021 [P] [US1] x-ui.modal component"
Task: "T022 [P] [US1] Tabs Livewire component"
Task: "T023 [P] [US1] Tabs Blade view"
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Complete Phase 1: Setup + Phase 2: Foundational
2. Complete Phase 3: User Story 1 (component library + settings hub)
3. **STOP and VALIDATE**: Run component tests, verify visual consistency on settings hub page
4. Deploy/demo if ready — component library is reusable groundwork

### Incremental Delivery

1. Setup + Foundational → Foundation ready
2. US1 (component library + settings hub) → Test → Deploy (MVP!)
3. US2 (DataTable + list pages) → Test → Deploy
4. US3 (detail pages + tabs) → Test → Deploy
5. US4 (mobile responsive) → Test → Deploy
6. US5 (inline actions) → Test → Deploy
7. Polish + cleanup → Final verification

### Parallel Team Strategy

With multiple developers:

1. Team completes Setup + Foundational together
2. Once Foundational is done:
   - Developer A: User Story 1 (component library) + User Story 2 (DataTable)
   - Developer B: User Story 4 (mobile responsive) — can start immediately after Foundation
   - Developer C: Polish prep (identify old Bootstrap pages to migrate)
3. After US1+2 complete:
   - Developer A: User Story 3 (detail tabs)
   - Developer B: User Story 5 (inline actions)
4. Team completes Polish phase together

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story should be independently completable and testable
- Verify tests fail before implementing
- Commit after each task or logical group
- Stop at any checkpoint to validate story independently
- Avoid: vague tasks, same file conflicts, cross-story dependencies that break independence
- All existing packages (Livewire 4.3, Alpine 3.15, ApexCharts 5.11, Tailwind v4.2) are already installed — no new dependencies required
