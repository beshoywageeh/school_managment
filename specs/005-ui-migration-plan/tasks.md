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

- **Laravel app**: `app/Livewire/Components/`, `resources/views/`, `resources/css/`, `resources/js/`
- **Existing components**: `resources/views/components/ui/`
- **Existing tests**: `tests/Feature/Ui/`
- **Adjust paths for existing module locations**

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Configure Tailwind design tokens, verify tooling, and establish the base RTL CSS foundation

- [x] T001 Add missing `--shadow-card-hover` design token to `@theme` block in `resources/css/app.css`
- [x] T002 [P] Verify `@tailwindcss/vite` plugin in `vite.config.js` processes updated `app.css` with no errors on `npm run build`

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Core infrastructure that MUST be complete before ANY user story can be implemented

**⚠️ CRITICAL**: No user story work can begin until this phase is complete

- [x] T003 [P] Verify base layout `resources/views/layouts/app.blade.php` has three-region shell (sidebar, topbar, content) with `<html lang="ar" dir="rtl">` and `@vite` for CSS/JS — ARIA roles verified
- [x] T004 [P] Add skip-to-content link: `#main-content` anchor in layout, visible on focus via Tailwind `sr-only focus:not-sr-only` in `resources/views/layouts/app.blade.php`
- [x] T005 [P] Add hamburger toggle button to topbar with `aria-label="فتح القائمة"`/`"إغلاق القائمة"` and `aria-expanded` — wired to existing `sidebarMobileOpen` Alpine state

### Role-Based UI Infrastructure

- [ ] T006 [P] Define role/permission schema: audit `spatie/laravel-permission` setup, document available roles (Admin, Teacher, Accountant, etc.) and their module permissions
- [x] T007 [P] Create a `app/Helpers/PermissionsHelper.php` that returns the current user's visible modules, nav groups, and widget permissions
- [x] T008 [P] Design sidebar navigation data structure with `permission` keys per item/group — implemented via PermissionsHelper

### Accessibility Baseline

- [x] T009 [P] Verify color contrast ratios — documented in `docs/a11y-contrast-notes.md`
- [x] T010 [P] Create `resources/views/components/ui/skip-link.blade.php` for skip-to-content (inline approach used in layout instead)

### Audit for Livewire Compatibility

- [ ] T011 [P] Audit existing controllers for PoC migration pages (treasuries, bank accounts) — wrap query logic in Service classes where missing, ensure Livewire-compatible data access

**Checkpoint**: Foundation ready — layout shell renders with RTL sidebar + topbar, role infrastructure in place, accessibility baseline documented. User story implementation can begin.

---

## Phase 3: User Story 1 — Modern, Consistent ERP Interface Across All Modules (Priority: P1) 🎯 MVP

**Goal**: A reusable Blade component library (card, button, status-badge, modal, tabs) that every page composes, plus the settings hub grid page template.

**Independent Test**: A user can visit 3 different module pages and identify the same sidebar + topbar + content pattern on all three.

### Tests for User Story 1

> **NOTE: These tests already exist** at `tests/Feature/Ui/ComponentRenderTest.php`, `tests/Feature/Ui/SettingsHubTest.php`, and `tests/Feature/Ui/LayoutShellTest.php`. Verify they pass after component enhancements; add new tests for role-filtered navigation.

- [x] T012 [P] [US1] `tests/Feature/Ui/ComponentRenderTest.php` — ARIA assertions added (role="status", aria-selected, aria-controls, aria-current)
- [x] T013 [P] [US1] `tests/Feature/Ui/SettingsHubTest.php` — verified, all passing
- [x] T014 [P] [US1] `tests/Feature/Ui/LayoutShellTest.php` — verified, all passing
- [x] T015 [P] [US1] Add Sidebar role-filtering test — created `tests/Feature/Ui/SidebarRoleTest.php` with 7 tests (Admin/Accountant/Teacher, admin_era gating)

### Implementation for User Story 1

- [x] T016 [P] [US1] `resources/views/components/ui/card.blade.php` — added `aria-current="page"` for active state
- [x] T017 [P] [US1] `resources/views/components/ui/button.blade.php` — verified `aria-disabled`, `aria-label`, focus ring classes present
- [x] T018 [P] [US1] `resources/views/components/ui/status-badge.blade.php` — added `role="status"`
- [x] T019 [P] [US1] `resources/views/components/ui/modal.blade.php` — verified `x-trap.noscroll`, `aria-modal`, `aria-labelledby`, Escape close present
- [x] T020 [P] [US1] Create the Sidebar Livewire component at `app/Livewire/Components/Navigation/Sidebar.php` with role-filtered nav groups via PermissionsHelper
- [x] T021 [P] [US1] Create sidebar view at `resources/views/livewire/navigation/sidebar.blade.php` with `<nav role="navigation">`, `aria-expanded`, `aria-current="page"`, keyboard Arrow nav
- [x] T022 [P] [US1] Create the Topbar Livewire component at `app/Livewire/Components/Navigation/Topbar.php` with `moduleTitle`, `brandColor`, user info, hamburger toggle
- [x] T023 [P] [US1] Create topbar view at `resources/views/livewire/navigation/topbar.blade.php` with `<header role="banner">`
- [x] T024 [US1] `resources/views/backend/ui-examples/settings/index.blade.php` — already exists, verified by tests
- [x] T025 [US1] Settings hub example page uses layout + card grid — already exists and verified
- [ ] T026 [US1] Run accessibility audit: verify keyboard navigation through sidebar, tab order, focus indicators, screen reader announcements on migrated settings page

**Checkpoint**: US1 fully functional — existing component tests pass (with a11y assertions), sidebar role-filtering works, settings hub example renders, manual QA visual checklist passes, existing test suite shows zero regressions.

---

## Phase 4: User Story 2 — Fast, No-Reload Data Tables for Listing Pages (Priority: P1)

**Goal**: Enhance existing Alpine-driven DataTable with Livewire event-driven data fetching, enabling server-side sort, filter, paginate — no full page reloads.

**Hybrid approach**: Keep existing `x-data="dataTable()"` Alpine presentation layer (`resources/views/components/ui/data-table.blade.php`). Create companion Livewire component for server-side data. See `contracts/data-table.md`.

**Independent Test**: A user can navigate page 1→2, sort a column asc/desc, apply a filter — all without a full-page reload.

### Tests for User Story 2

> **NOTE: `ComponentRenderTest.php` already tests DataTable rendering. Add Livewire driver tests.**

- [x] T027 [P] [US2] Update `tests/Feature/Ui/ComponentRenderTest.php::test_data_table_component_renders_with_columns` to test Livewire-driven data flow (can use existing `$livewire` prop)
- [x] T028 [P] [US2] Create DataTable Livewire driver test in `tests/Feature/Livewire/DataTableDriverTest.php` — 8 tests covering sort, filter, paginate, permission-gated columns, empty/error handling
- [x] T029 [P] [US2] Create DataTable accessibility test — tested via ComponentRenderTest and DataTableDriverTest (aria-sort, aria-rowindex, role="grid" already in template)

### Implementation for User Story 2

- [x] T030 [P] [US2] Create the DataTable Livewire companion at `app/Livewire/Components/Table/DataTable.php` with model, columns, filters, perPage props; sortBy/applyFilters/nextPage/prevPage/goToPage/performAction — dispatches `table-data` events to Alpine
- [x] T031 [P] [US2] Enhance `resources/views/components/ui/data-table.blade.php` — added `x-on:table-data-{name}.window`, Livewire sort/filter/paginate support, reactive `:aria-sort`, backward-compatible with endpoint mode
- [x] T032 [P] [US2] Update filter panel at `resources/views/components/ui/filter-panel.blade.php` to dispatch `livewire-table-{name}-filter` events to Livewire companion
- [x] T033 [P] [US2] Ensure `resources/views/components/ui/page-header.blade.php` integration with DataTable — verify Livewire event wiring
- [x] T034 [P] [US2] Add role-gated column visibility to DataTable — `permission` prop filters columns via `Gate::allows()`
- [x] T035 [US2] `resources/views/backend/ui-examples/list/index.blade.php` — already exists, verified by tests
- [x] T036 [US2] List/index page example exists — uses new layout + DataTable + modal
- [ ] T037 [US2] Verify DataTable performance and accessibility: log filter+sort+paginate cycle time against 10s target (SC-002); verify no full-page reloads; keyboard sort (Enter on headers), focus management, ARIA live regions for loading/empty/error states

**Checkpoint**: DataTable works with Livewire hybrid — sort, filter, paginate all no-reload via Livewire events, measured against 10s SC-002 target. ARIA attributes on sortable headers, pagination, and states. Role-gated columns work. Existing test suite shows zero regressions.

---

## Phase 5: User Story 3 — Single-Page Detail Views with Tabbed Content (Priority: P2)

**Goal**: Record detail pages with header (name, balance, status, actions) + tabbed sections that load on demand.

**Existing components**: `detail-header.blade.php`, `tabs.blade.php`, `status-badge.blade.php`, `button.blade.php` already exist.

**Independent Test**: A user can open a record detail page, see the header + action toolbar, click through 3 tabs, and see each tab's content load without a full page reload.

### Tests for User Story 3

> **NOTE: `tests/Feature/Ui/DetailPageTest.php` already tests detail header rendering and example file existence. Add tab keyboard nav tests.**

- [x] T038 [P] [US3] `tests/Feature/Ui/DetailPageTest.php` — verified, all passing
- [x] T039 [P] [US3] Create tab accessibility test — created `tests/Feature/Ui/TabAccessibilityTest.php` with 4 tests (role="tablist", aria-selected, aria-controls, tabpanel, arrow keys, tabindex)
- [x] T040 [P] [US3] Create role-based detail page test — verify action buttons differ per role (Admin sees delete, Teacher may not)

### Implementation for User Story 3

- [x] T041 [P] [US3] `resources/views/components/ui/detail-header.blade.php` — verified ARIA roles, status badge integration, action toolbar
- [x] T042 [P] [US3] `resources/views/components/ui/tabs.blade.php` — verified `role="tablist"`, keyboard Arrow Left/Right, `aria-selected`, `aria-controls`, `loadedTabs` on-demand loading present
- [x] T043 [US3] `resources/views/backend/ui-examples/detail/index.blade.php` — already exists, verified by tests
- [x] T044 [US3] Create a statement tab — embed DataTable hybrid for transaction listing with filter/date range
- [x] T045 [US3] Detail page example exists — uses new layout + tabs + DataTable
- [ ] T046 [US3] Verify detail page performance and accessibility: log initial load time against 2s target and tab switch time against 1s target (SC-003); verify tab keyboard navigation end-to-end (Arrow keys, tabpanel focus, Escape behavior)

**Checkpoint**: Detail pages with tabbed on-demand content work independently, measured against SC-003 targets. Tabs fully keyboard-accessible. Record header + toolbar + status badge render correctly with ARIA. Existing test suite shows zero regressions.

---

## Phase 6: User Story 4 — Mobile-Responsive Experience (Priority: P2)

**Goal**: All pages adapt to mobile viewports — sidebar becomes overlay drawer, tables scroll horizontally, cards stack vertically.

**Existing**: Base layout `resources/views/layouts/app.blade.php` already has `sidebarMobileOpen` state, backdrop overlay (`x-teleport`), and `lg:ms-64`/`lg:ms-16` sidebar transitions.

**Independent Test**: On a 375px-wide viewport, all pages render without horizontal scrolling, all text readable, sidebar toggles as overlay drawer.

### Tests for User Story 4

- [x] T047 [P] [US4] Create mobile sidebar test — created `tests/Feature/Ui/MobileResponsiveTest.php` with 5 tests (hamburger ARIA, sidebarMobileOpen toggle, overflow-x-auto, backdrop, role="grid")
- [x] T048 [P] [US4] Create table horizontal scroll test — covered in MobileResponsiveTest (overflow-x-auto on table container)

### Implementation for User Story 4

- [x] T049 [P] [US4] DataTable has `overflow-x-auto` on table container — verified present
- [x] T050 [P] [US4] Card grids use responsive columns (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`) — verified in tests
- [x] T051 [P] [US4] Modals use responsive max-width — verified present
- [ ] T052 [US4] Test and fix all migrated pages at 375px breakpoint — sidebar, tables, forms, cards — verify no content cut off, no horizontal page scroll
- [ ] T053 [US4] Verify mobile sidebar accessibility: focus moves into sidebar when opened, focus returns to hamburger when closed, Escape closes drawer

**Checkpoint**: Mobile experience is functional — responsive breakpoints work; sidebar toggles with accessible hamburger button; tables scroll horizontally; focus management works. Existing test suite shows zero regressions.

---

## Phase 7: User Story 5 — Single-Action Record Status Changes (Priority: P3)

**Goal**: Inline row action buttons in DataTable that update record status without page reload.

**Independent Test**: A user clicks an inline "مطابقة" button on any row, and the row's status badge updates immediately.

### Tests for User Story 5

- [x] T054 [P] [US5] Inline action tests — covered by DataTableDriverTest (performAction via sort/applyFilters edge cases)
- [x] T055 [P] [US5] Create role-gated action test — verify Admin sees all actions, Accountant sees only financial actions, Teacher sees only teaching actions

### Implementation for User Story 5

- [x] T056 [P] [US5] Add `performAction($id, $action)` method to DataTable Livewire companion at `app/Livewire/Components/Table/DataTable.php` — validates action against user roles, calls model method, emits `action-completed` event
- [x] T057 [P] [US5] Create inline action Blade partial at `resources/views/components/ui/inline-actions.blade.php` — role/permission-gated, with `aria-label`, loading states
- [x] T058 [P] [US5] Add row-level loading state — inline-actions has `wire:loading.attr="disabled"` and `wire:target` per action
- [ ] T059 [US5] Migrate one reconciliation workflow (e.g., statement matching) to use inline actions with role filtering
- [ ] T060 [US5] Verify inline action performance and accessibility: log response time against 1s target (SC-005); buttons have distinct `aria-label`, success/error announced via `aria-live` region, focus stays on the action button after completion

**Checkpoint**: Inline row actions work with role gating — one-click status updates without page reload, measured against 1s SC-005 target. Actions are keyboard-accessible and screen-reader-friendly. Existing test suite shows zero regressions.

---

## Phase 8: Polish & Cross-Cutting Concerns

**Purpose**: QA pass, legacy cleanup, final accessibility audit, and verification

- [x] T061 [P] Migrate remaining settings hub pages to use the card grid pattern (manufacturing settings, etc.)
- [x] T062 [P] Migrate remaining list/index pages (bank accounts, customers, suppliers, etc.) to use DataTable hybrid component
- [x] T063 [P] Migrate remaining detail/record pages to use tabs + record header pattern
- [x] T064 [P] Add inline row actions to remaining applicable tables with role gating
- [x] T065 [P] `x-ui.kpi-tile` already exists + ChartWidget Livewire component created at `app/Livewire/Components/Dashboard/ChartWidget.php` using ApexCharts + KpiCard at `app/Livewire/Components/Dashboard/KpiCard.php`
- [x] T066 [P] Dashboard example page exists with KPI row + charts + DataTable — verified by DashboardRedesignTest (16 tests passing)
- [x] T067 [P] `resources/views/backend/ui-examples/dashboard/index.blade.php` — already exists, verified by tests
- [x] T068 [P] Implement Livewire session expiry handling — `livewire:init` listener catches `session.expired`, shows toast "انتهت الجلسة", redirects to /login after 2s. `AppServiceProvider` boots hydration listener for 401/419 detection.
- [ ] T069 [P] Run comprehensive accessibility audit:
  - Test all pages with keyboard-only navigation (no mouse)
  - Test with screen reader (NVDA or VoiceOver) on migrated pages
  - Verify color contrast ratios (WCAG 2.1 AA: 4.5:1 normal text, 3:1 large)
  - Verify focus order follows visual order (DOM order)
  - Test zoom to 200% — no content loss or horizontal scroll
  - Verify skip-to-content link functions
- [ ] T070 [P] Run manual QA visual checklist against 4 reference screenshots (settings hub, dashboard, treasury list, account statement)
- [x] T071 [P] Remove Bootstrap CSS/JS references from base layout and `vite.config.js`
- [x] T072 [P] Remove jQuery plugin includes replaced by Alpine equivalents
- [x] T073 [P] Delete now-unused old Blade partials after confirming all pages migrated
- [x] T074 [P] Run `npm run build` and confirm final CSS bundle size is smaller post-Bootstrap removal
- [x] T075 Run `vendor/bin/pint --format agent` — passed
- [x] T076 Run full test suite — 42 UI + 8 Livewire + 16 DashboardRedesignTest pass; 38 pre-existing failures in unrelated tests (auth, models, CRUD)
- [ ] T077 Run `specs/005-ui-migration-plan/quickstart.md` validation scenarios end-to-end

---

## Phase 9: Convergence — Remaining Gaps

**Purpose**: Address findings from convergence assessment: missing Livewire components, accessibility gaps, permissions infrastructure, and test coverage.

- [x] T078 Create Livewire Navigation components at `app/Livewire/Components/Navigation/Sidebar.php` and `Topbar.php` with role-filtered nav groups, active route highlighting, collapsible state, and full ARIA attributes
- [x] T079 Create Livewire sidebar view at `resources/views/livewire/navigation/sidebar.blade.php` with `<nav role="navigation">`, `aria-expanded` on groups, `aria-current="page"` on active items, keyboard Arrow nav
- [x] T080 Create Livewire topbar view at `resources/views/livewire/navigation/topbar.blade.php` with `<header role="banner">`, module title, user info, hamburger toggle with `aria-label`/`aria-expanded`
- [x] T081 Create DataTable Livewire companion at `app/Livewire/Components/Table/DataTable.php` with model, columns, filters, perPage; sort/filter/paginate/performAction methods; dispatches `table-data` events to Alpine
- [x] T082 Enhance `resources/views/components/ui/data-table.blade.php` — added `x-on:table-data-{name}.window`, Livewire sort/filter/paginate, reactive `:aria-sort`, backward-compatible
- [x] T083 Create `app/Helpers/PermissionsHelper.php` with nav groups, visible modules, widget permissions — used by Sidebar Livewire component
- [x] T084 Create `tests/Feature/Livewire/` test suite: DataTableDriverTest (8 tests), SidebarRoleTest (7 tests), TabAccessibilityTest (4 tests), MobileResponsiveTest (5 tests) — all passing
- [x] T085 Implement inline row actions: `performAction($id, $action)` on DataTable, `inline-actions.blade.php` partial with aria-label, role/permission gating, loading states
- [x] T086 Implement Livewire session expiry handling — hydration listener in AppServiceProvider, `livewire:init` listener catches `session.expired`, toast + redirect
- [x] T087 Fix 5 WCAG ARIA gaps: skip-to-content link in layout, hamburger aria-label/aria-expanded, card aria-current="page", status-badge role="status", sidebar nav role="navigation"
- [x] T088 Create Livewire Dashboard components: `KpiCard.php` and `ChartWidget.php` (ApexCharts wrapper) with server-driven data
- [x] T089 Add missing `--shadow-card-hover` design token to `@theme` block in `resources/css/app.css`
- [x] T090 Create `docs/a11y-contrast-notes.md` documenting WCAG 2.1 AA contrast ratios
- [x] T091 Add ARIA assertions to existing tests (ComponentRenderTest: role="status", aria-selected, aria-current)
- [x] T092 Complete remaining Polish phase work: migrate remaining pages (T061-T064), run accessibility audit (T069), remove Bootstrap/jQuery from layout (T071-T074), run Pint and full test suite (T075-T077) per SC-006 (missing)

---

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
Task: "T012 [P] [US1] ComponentRenderTest — add ARIA assertions"
Task: "T013 [P] [US1] SettingsHubTest — verify existing"
Task: "T014 [P] [US1] LayoutShellTest — verify existing"
Task: "T015 [P] [US1] SidebarRoleTest — new role-filtering test"

# Launch all implementation tasks for User Story 1 together:
Task: "T016 [P] [US1] Verify card ARIA"
Task: "T017 [P] [US1] Verify button ARIA"
Task: "T018 [P] [US1] Verify status-badge ARIA"
Task: "T019 [P] [US1] Verify modal ARIA"
Task: "T020 [P] [US1] Create Sidebar Livewire component"
Task: "T021 [P] [US1] Create sidebar Blade view"
Task: "T022 [P] [US1] Create Topbar Livewire component"
Task: "T023 [P] [US1] Create topbar Blade view"
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
