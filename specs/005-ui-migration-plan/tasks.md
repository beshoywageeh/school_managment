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

- [ ] T001 Add ERP-specific brand and status color tokens to `@theme` block in `resources/css/app.css` (brand colors, status-active/excluded/neutral/primary, surface-sidebar, card radius, card shadows)
- [ ] T002 [P] Configure RTL Arabic font loading (Cairo or Tajawal via Google Fonts or Bunny Fonts) in `resources/css/app.css`
- [ ] T003 [P] Verify `@tailwindcss/vite` plugin in `vite.config.js` processes updated `app.css` with no errors on `npm run build`
- [ ] T004 [P] Add `rtl:` and `inset-inline-*` Tailwind utility documentation comment in app.css for team reference

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

### Audit for Livewire Compatibility

- [ ] T013b [P] Audit existing controllers for PoC migration pages (treasuries, bank accounts) — wrap query logic in Service classes where missing, ensure Livewire-compatible data access

---

## Phase 3: User Story 1 — Modern, Consistent ERP Interface Across All Modules (Priority: P1) 🎯 MVP

**Goal**: A reusable Blade component library (card, button, status-badge, modal, tabs) that every page composes, plus the settings hub grid page template.

**Independent Test**: A user can visit 3 different module pages and identify the same sidebar + topbar + content pattern on all three.

### Tests for User Story 1

> **NOTE: Write these tests FIRST, ensure they FAIL before implementation**

- [ ] T014 [P] [US1] Create Sidebar component test in `tests/Feature/Livewire/Components/SidebarTest.php` — test nav group rendering, collapsible toggle, active route highlighting
- [ ] T015 [P] [US1] Create Card component test in `tests/Feature/Livewire/Components/CardTest.php` — test rendering with icon/label, active state (green border), hover state
- [ ] T016 [P] [US1] Create Modal component test in `tests/Feature/Livewire/Components/ModalTest.php` — test open/close via event dispatch, outside click close, Escape close
- [ ] T017 [P] [US1] Create Tabs component test in `tests/Feature/Livewire/Components/TabsTest.php` — test tab switching, active tab highlight, on-demand content loading

### Implementation for User Story 1

- [ ] T018 [P] [US1] Create `x-ui.card` Blade component at `resources/views/components/ui/card.blade.php` with icon, label, href, active props (from `contracts/cards.md`)
- [ ] T019 [P] [US1] Create `x-ui.button` Blade component at `resources/views/components/ui/button.blade.php` with variant (primary/secondary/danger), icon, size props (from `contracts/button.md`)
- [ ] T020 [P] [US1] Create `x-ui.status-badge` Blade component at `resources/views/components/ui/status-badge.blade.php` with status (active/excluded/neutral/primary) and label props (from `contracts/status-badge.md`)
- [ ] T021 [P] [US1] Create `x-ui.modal` Blade component at `resources/views/components/ui/modal.blade.php` with id, title, size props, Alpine open/close, backdrop, Escape handling (from `contracts/modals.md`)
- [ ] T022 [P] [US1] Create the Tabs Livewire component at `app/Http/Livewire/Components/UI/Tabs.php` with tabs prop, activeTab state, switchTab method (from `contracts/tabs.md`)
- [ ] T023 [P] [US1] Create Tabs view at `resources/views/livewire/ui/tabs.blade.php` with tab bar + on-demand panels
- [ ] T024 [US1] Create settings hub grid page template — `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4` of `x-ui.card` components, config-driven from controller
- [ ] T025 [US1] Migrate one existing settings/hub page to use the new layout + card grid as a proof of concept

**Checkpoint**: At this point, US1 is fully functional — component library renders correctly, settings hub page works with new layout, all tests pass.

---

## Phase 4: User Story 2 — Fast, No-Reload Data Tables for Listing Pages (Priority: P1)

**Goal**: A reusable DataTable Livewire component with server-side sort, filter, paginate — no full page reloads.

**Independent Test**: A user can navigate page 1→2, sort a column asc/desc, apply a filter — all without a full-page reload.

### Tests for User Story 2

> **NOTE: Write these tests FIRST, ensure they FAIL before implementation**

- [ ] T026 [P] [US2] Create DataTable component test in `tests/Feature/Livewire/Components/DataTableTest.php` — test sortBy toggles direction, nextPage/prevPage, applyFilters, loading state, empty state, error state
- [ ] T027 [P] [US2] Create DataTable rendering test — test column headers render, rows render from model data, pagination controls show correct from/to/total

### Implementation for User Story 2

- [ ] T028 [P] [US2] Create the DataTable Livewire component at `app/Http/Livewire/Components/Table/DataTable.php` with model, columns, filters, rowActions, perPage props; sortKey/sortDir/filterValues/page state; sortBy/applyFilters/nextPage/prevPage/performAction methods (from `contracts/data-table.md`)
- [ ] T029 [P] [US2] Create DataTable view at `resources/views/livewire/table/data-table.blade.php` with sortable column headers, loading/empty/error states, pagination controls, row action slot
- [ ] T030 [P] [US2] Create `x-ui.data-table` Blade wrapper component at `resources/views/components/ui/data-table.blade.php` for simplified page inclusion
- [ ] T031 [P] [US2] Create filter panel partial with search input, select filters, and "بحث" + "اعاده تعين" action buttons
- [ ] T032 [US2] Migrate one existing list/index page (e.g., treasuries list) to use the new layout + DataTable component as proof of concept

**Checkpoint**: DataTable works independently — sort, filter, paginate all no-reload. Listing pages can be migrated module by module.

---

## Phase 5: User Story 3 — Single-Page Detail Views with Tabbed Content (Priority: P2)

**Goal**: Record detail pages with header (name, balance, status, actions) + tabbed sections that load on demand.

**Independent Test**: A user can open a record detail page, see the header + action toolbar, click through 3 tabs, and see each tab's content load without a full page reload.

### Tests for User Story 3

> **NOTE: Write these tests FIRST, ensure they FAIL before implementation**

- [ ] T033 [P] [US3] Create Tab switching test — verify switchTab() changes active tab, lazy-loads content, preserves other tab state
- [ ] T034 [P] [US3] Create detail page integration test — record header renders with status badge + action buttons, tabs render with correct Arabic labels

### Implementation for User Story 3

- [ ] T035 [P] [US3] Create the detail page layout template — record header section (name, balance/amount, x-ui.status-badge, x-ui.button toolbar for edit/transfer/deactivate/delete)
- [ ] T036 [P] [US3] Wire up tabs to use the Tabs Livewire component with lazy-loaded content per tab (statement, transfers, activity, system, details)
- [ ] T037 [US3] Create a statement tab — embed DataTable for transaction listing with filter/date range
- [ ] T038 [US3] Migrate one existing detail page (e.g., bank account detail) to use new layout + tabs + statement DataTable as proof of concept

**Checkpoint**: Detail pages with tabbed on-demand content work independently. Record header + toolbar + status badge render correctly.

---

## Phase 6: User Story 4 — Mobile-Responsive Experience (Priority: P2)

**Goal**: All pages adapt to mobile viewports — sidebar becomes overlay drawer, tables scroll horizontally, cards stack vertically.

**Independent Test**: On a 375px-wide viewport, all pages render without horizontal scrolling, all text readable, sidebar toggles as overlay drawer.

### Tests for User Story 4

- [ ] T039 [P] [US4] Create mobile responsive test — verify sidebar hidden by default on mobile, togglable via hamburger button, backdrop overlay appears
- [ ] T040 [P] [US4] Create table horizontal scroll test — verify table container has `overflow-x-auto` at mobile breakpoint

### Implementation for User Story 4

- [ ] T041 [P] [US4] Add mobile sidebar drawer — overlay with backdrop, hamburger toggle button in topbar, `x-show="sidebarOpen"`, `@click.outside` to close
- [ ] T042 [P] [US4] Add horizontal scroll wrapper to DataTable for mobile — `overflow-x-auto` container
- [ ] T043 [P] [US4] Verify all card grids use responsive columns (`grid-cols-1 sm:grid-cols-2 lg:grid-cols-3`)
- [ ] T044 [P] [US4] Verify all modals use responsive max-width (`max-w-full sm:max-w-lg`) at mobile
- [ ] T045 [US4] Test and fix all migrated pages at 375px breakpoint — sidebar, tables, forms, cards

**Checkpoint**: Mobile experience is functional — responsive breakpoints work; sidebar toggles; tables scroll.

---

## Phase 7: User Story 5 — Single-Action Record Status Changes (Priority: P3)

**Goal**: Inline row action buttons in DataTable that update record status without page reload.

**Independent Test**: A user clicks an inline "مطابقة" button on any row, and the row's status badge updates immediately.

### Tests for User Story 5

- [ ] T046 [P] [US5] Create inline action test — verify performAction() calls server, updates row status in UI, handles error response gracefully

### Implementation for User Story 5

- [ ] T047 [P] [US5] Add `performAction($id, $action)` method to DataTable Livewire component — validates action, calls model method, refreshes row data
- [ ] T048 [P] [US5] Create inline action Blade partial for row action buttons (primary action + kebab menu) in `resources/views/components/table/data-table-actions.blade.php`
- [ ] T049 [US5] Migrate one reconciliation workflow (e.g., statement matching) to use inline actions

**Checkpoint**: Inline row actions work — one-click status updates without page reload.

---

## Phase 8: Polish & Cross-Cutting Concerns

**Purpose**: QA pass, legacy cleanup, and final verification

- [ ] T050 [P] [US1] Migrate remaining settings hub pages to use the card grid pattern (manufacturing settings, etc.)
- [ ] T051 [P] [US2] Migrate remaining list/index pages (bank accounts, customers, suppliers, etc.) to use DataTable component
- [ ] T052 [P] [US3] Migrate remaining detail/record pages to use tabs + record header pattern
- [ ] T053 [P] [US5] Add inline row actions to remaining applicable tables
- [ ] T054 [P] Create a KPI stat card variant of `x-ui.card` and a ChartWidget Livewire component for dashboard pages using ApexCharts
- [ ] T055 [P] Build the dashboard page — KPI row + donut chart + line chart + latest-records DataTable
- [ ] T056 [P] Add loading skeletons/spinners to all Livewire components during data fetch
- [ ] T057 [P] Add empty state ("لا توجد بيانات") and error state ("حدث خطأ في التحميل") to all async components
- [ ] T057b [P] Implement Livewire session expiry handling — catch 401/419 in Livewire lifecycle hooks, show toast "انتهت الجلسة", redirect to /login after 2s
- [ ] T058 [P] Run manual QA visual checklist against 4 reference screenshots (settings hub, dashboard, treasury list, account statement)
- [ ] T059 [P] Verify keyboard accessibility — modals trap focus, close on Escape, tab order through forms
- [ ] T060 [P] Remove Bootstrap CSS/JS references from base layout and `vite.config.js`
- [ ] T061 [P] Remove jQuery plugin includes replaced by Alpine equivalents
- [ ] T062 [P] Delete now-unused old Blade partials after confirming all pages migrated
- [ ] T063 [P] Run `npm run build` and confirm final CSS bundle size
- [ ] T064 Run `vendor/bin/pint --format agent` across all new files
- [ ] T065 Run full test suite: `php artisan test --compact`
- [ ] T066 Run quickstart.md validation scenarios end-to-end

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
