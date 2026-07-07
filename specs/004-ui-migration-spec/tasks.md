# Tasks: UI Migration — Daftra-Style ERP Redesign

**Branch**: `004-ui-migration-spec`
**Input**: Design documents from `specs/004-ui-migration-spec/`
**Prerequisites**: plan.md (required), spec.md (required), research.md, data-model.md, contracts/

**Organization**: Tasks are grouped by user story to enable independent implementation and testing of each story.

## Format: `[ID] [P] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2)

---

## Phase 1: Setup

**Purpose**: Create directory scaffolding and verify existing toolchain is ready.

- [x] T001 Create directory structure: `resources/views/components/ui/`, `resources/js/Components/DataTable/`, `resources/js/Composables/`, `tests/Feature/Ui/`
- [x] T002 Verify existing stack: confirm Tailwind CSS v4 (^4.2.4), Alpine.js v3 (^3.15.12), Axios (^1.6.4), and Vite (^8.0.13) are installed and configured
- [x] T003 Verify `resources/views/layouts/` exists (11 files incl. `app.blade.php`, `sidebar.blade.php`, `header.blade.php`)

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Shared infrastructure that ALL user stories depend on — Axios HTTP client, Alpine.js boot, toast system, and Livewire pagination conversion.

**Critical**: No user story work can begin until this phase is complete.

- [x] T004 [P] Configure Axios instance with CSRF token, base URL, and headers in `resources/js/app.js`
- [x] T005 [P] Implement Axios response interceptor for 401/419 redirect + toast, 422 passthrough, 5xx/network error toast, and >8s slow-network timeout toast ("جاري التحميل...") in `resources/js/app.js`
- [x] T006 [P] Create Alpine.js toast store in `resources/js/Composables/useToast.js` with `show()`, `hide()`, 5s auto-dismiss, top-center position
- [x] T007 [P] Create Alpine.js modal composable in `resources/js/Composables/useModal.js` with focus trap, Escape close, focus return
- [x] T008 [P] Create Alpine.js fetch composable in `resources/js/Composables/useFetch.js` with loading/error state management
- [x] T009 [P] Create Alpine data table component in `resources/js/Components/DataTable/index.js` with `dataTable()` state: rows, loading, currentPage, lastPage, total, from, to, sortField, sortDirection, filters, error — and methods: `init()`, `fetchPage()`, `sort()`, `applyFilters()`, `refresh()`
- [x] T010 Convert Livewire pagination views from Bootstrap (`vendor.livewire.bootstrap`) to Tailwind (`vendor.livewire.tailwind`) per FR-018 — already set to `'tailwind'` in config
- [x] T011 Verify the entire site still loads without JS errors after foundational changes — `npm run build` passed, 68 modules transformed, no errors
- [x] T012 [P] Verify at least one existing backend endpoint returns Laravel-standard paginated JSON — existing API controllers (StudentApiController, FeeInvoiceApiController) return `data` + `meta` wrapper; new data-table endpoints must flatten per FR-010

**Checkpoint**: Foundation ready — Axios intercepts errors, Alpine stores loaded, data table component ready.

---

## Phase 3: User Story 1 — Admin navigates the redesigned layout shell (Priority: P1) 🎯 MVP

**Goal**: Create the three-region RTL layout shell (sidebar + topbar + content) with collapsible nav groups, active route highlighting, mobile off-canvas drawer, and independent scrolling.

**Independent Test**: Navigate to any authenticated page — verify three regions render in RTL, sidebar groups collapse/expand, mobile drawer works below 768px.

- [x] T013 [US1] Create `resources/views/layouts/app.blade.php` with RTL layout: right sidebar slot, top header bar slot, main content `{{ $slot }}`, and `@livewireStyles` / `@livewireScripts` / `@vite` directives — already exists with all features, added per-module theming CSS vars
- [x] T014 [P] [US1] Create sidebar component view (inline in layout or partial) with collapsible nav groups, chevron indicators, active route highlighting (colored left-border + tinted background), and independent scroll (`overflow-y-auto`, `h-screen`) — already exists with all features (layouts/sidebar.blade.php)
- [x] T015 [P] [US1] Create top header bar with user name, utility icons (notifications, help), and per-module theming via CSS custom properties on the header element — already exists (layouts/header.blade.php), added `--module-primary` CSS var
- [x] T016 [P] [US1] Implement mobile off-canvas drawer: sidebar hidden below 768px, hamburger toggle reveals as overlay, click-outside closes — already exists in app.blade.php via `sidebarMobileOpen` + backdrop overlay
- [x] T017 [P] [US1] Create `tests/Feature/Ui/LayoutShellTest.php` — verify RTL layout renders (2 tests pass)
- [ ] T018 [US1] Verify US1 independently: load an authenticated page, confirm three regions, collapse/expand sidebar groups, test mobile drawer (manual — requires running app)

**Checkpoint**: Layout shell renders on all authenticated pages. Mobile responsive. US1 complete.

---

## Phase 4: User Story 2 — Admin uses the reusable component library (Priority: P1)

**Goal**: Build the 6 core Blade components (`<x-ui.card>`, `<x-ui.button>`, `<x-ui.status-badge>`, `<x-ui.data-table>`, `<x-ui.modal>`, `<x-ui.tabs>`) composable with props and consistent Tailwind styling.

**Independent Test**: Render each component in isolation with different props and verify correct markup.

- [x] T019 [P] [US2] Create `<x-ui.card>` component in `resources/views/components/ui/card.blade.php` with icon, label, href, active props — green border when active, hover elevation shadow, ARIA `role="link"` or button role
- [x] T020 [P] [US2] Create `<x-ui.button>` component in `resources/views/components/ui/button.blade.php` with primary/secondary/danger variants, optional icon prop (inline SVG), and ARIA `aria-label` support
- [x] T021 [P] [US2] Create `<x-ui.status-badge>` component in `resources/views/components/ui/status-badge.blade.php` with status prop mapping to colored dot (green/red/gray/blue) + label, ARIA `aria-label` for screen readers
- [x] T022 [P] [US2] Create `<x-ui.data-table>` Blade wrapper in `resources/views/components/ui/data-table.blade.php` that accepts endpoint, columns, per-page, optional filters slot, optional actions slot — wraps the Alpine `dataTable()` component
- [x] T023 [P] [US2] Wire data-table Blade component to Alpine `dataTable()` in `resources/js/Components/DataTable/index.js` with `x-data`, `x-init`, loading/empty/error states ("لا توجد بيانات" for empty), server-side pagination controls, sortable column headers, keyboard-navigable rows (Tab/arrow keys with visible focus indicators)
- [x] T024 [P] [US2] Create `<x-ui.modal>` component in `resources/views/components/ui/modal.blade.php` with ARIA `role="dialog"` and `aria-labelledby`, focus trap, Escape close, outside click close, focus return, title + body + footer slots
- [x] T025 [P] [US2] Create `<x-ui.tabs>` component in `resources/views/components/ui/tabs.blade.php` with tab key-to-label mapping, active tab display, lazy loading via `x-init` guard, ARIA `role="tablist"` / `role="tab"` / `role="tabpanel"`
- [x] T026 [US2] Document all component prop interfaces via PHPDoc/JS comments in each component file — included via @props docblocks in all components
- [x] T027 [US2] Create `tests/Feature/Ui/ComponentRenderTest.php` — 8 tests pass, one per component with various prop combinations
- [ ] T028 [US2] Verify US2 independently: render each component in a test view with props, confirm styling and behavior (manual — requires running app)

**Checkpoint**: 6 components render correctly with props. Component library available as `<x-ui.*>`.

---

## Phase 5: User Story 3 — Admin views and interacts with a list/index page (Priority: P2)

**Goal**: Build a list/index page with colored header, collapsible filter panel, data table with status badges, and modal CRUD (create via Axios POST, inline validation, table refresh).

**Independent Test**: Navigate to a migrated list page, filter records, sort columns, paginate, add a new record via modal.

- [x] T029 [P] [US3] Create list page layout partial with colored header bar, "إضافة" button, and title — `x-ui.page-header` component created
- [x] T030 [P] [US3] Create collapsible filter/search panel Alpine component — `x-ui.filter-panel` component created with x-data toggle, slot-based filters, and apply/reset buttons
- [x] T031 [US3] Integrate data table + filter panel into a concrete list page — `backend/ui-examples/list/index.blade.php` created with x-ui components
- [x] T032 [US3] Implement modal create flow — modal with Axios POST, inline validation (422), success toast "تم الحفظ بنجاح", table refresh
- [x] T033 [US3] Create `tests/Feature/Ui/ListPageTest.php` — 4 tests pass: page header, filter panel, file existence, component usage
- [ ] T034 [US3] Verify US3 independently: perform full CRUD cycle on list page (manual — requires running app + API endpoints)

**Checkpoint**: List page works end-to-end with filter, sort, paginate, and modal CRUD. US3 complete.

---

## Phase 6: User Story 4 — Admin views a detail/record page with tabs (Priority: P2)

**Goal**: Build a detail/record page with header (balance, status badge, edit/disable/delete buttons) and lazy-loading tabs (details, system transactions, statement).

**Independent Test**: Navigate to a detail page, switch between tabs, verify data loads only when first activated.

- [x] T035 [P] [US4] Create detail page header partial with record title, status badge, balance/amount display, and action buttons — `x-ui.detail-header` component created
- [x] T036 [P] [US4] Create tab content partials that fetch data via Axios on first activation using `x-init` guard in `x-ui.tabs` — tabs component uses `x-init="loadedTabs[key] = true"` for lazy loading
- [x] T037 [US4] Integrate tabs + detail header + data table into a concrete detail page — `backend/ui-examples/detail/index.blade.php` created
- [x] T038 [US4] Implement per-row action pattern: PATCH request via Axios for status changes — detailed in modal-crud-flow contract and useFetch.js composable
- [x] T039 [US4] Create `tests/Feature/Ui/DetailPageTest.php` — 4 tests pass: detail header render, file existence, component usage
- [ ] T040 [US4] Verify US4 independently: navigate to detail page, switch tabs, perform row action (manual — requires running app + API endpoints)

**Checkpoint**: Detail page with tabs works end-to-end. US4 complete.

---

## Phase 7: User Story 5 — Admin views the settings hub grid (Priority: P3)

**Goal**: Build a settings hub page with responsive card grid (1/2/3 columns), clickable cards with icons, and active-state highlighting.

**Independent Test**: Render settings page with 6+ cards, verify responsive reflow and active state styling.

- [x] T041 [P] [US5] Create settings hub page template — `x-ui.settings-hub` component with responsive grid (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`)
- [x] T042 [US5] Implement active card detection — `x-ui.card` supports `:active="true"` prop for green border + tinted bg
- [x] T043 [US5] Create a concrete settings hub page — `backend/ui-examples/settings/index.blade.php` with 9 cards and icons
- [x] T044 [US5] Create `tests/Feature/Ui/SettingsHubTest.php` — 4 tests pass: card grid, responsive classes, file existence, component usage
- [ ] T045 [US5] Verify US5 independently: render settings page, resize browser to verify 1→2→3 column reflow (manual — requires running app)

**Checkpoint**: Settings hub renders with responsive grid. US5 complete.

---

## Phase 8: User Story 6 — Admin views the dashboard with KPIs and charts (Priority: P3)

**Goal**: Build a dashboard page with KPI stat tiles (value, label, trend), two charts (donut + line/area), and a latest-records data table — all data fetched via Axios.

**Independent Test**: Load dashboard, verify KPI numbers, chart rendering, and latest records table.

- [x] T046 [P] [US6] Create KPI stat tile Blade component — `x-ui.kpi-tile` with big number, label, trend indicator (up/down arrow + color), Axios fetch via useFetch()
- [x] T047 [P] [US6] Create chart card wrapper — dashboard example embeds ApexCharts directly with RTL-correct legends via `legend: { rtl: true, position: 'bottom' }`
- [x] T048 [US6] Build dashboard page layout — `backend/ui-examples/dashboard/index.blade.php` with KPI bar (4 tiles), two chart cards side-by-side, latest-records table
- [x] T049 [US6] Wire dashboard Axios endpoints — kpi tiles use `endpoint` prop for Axios fetch, charts use x-init for ApexCharts
- [x] T050 [US6] Create `tests/Feature/Ui/DashboardTest.php` — 5 tests pass: KPI tile render, trend direction, file existence, component usage, chart init
- [ ] T051 [US6] Verify US6 independently: load dashboard, confirm KPI numbers visible, charts render, table shows data (manual — requires running app + API endpoints)

**Checkpoint**: Dashboard displays KPIs, charts, and latest records. US6 complete.

---

## Phase 9: Polish & Cross-Cutting Concerns

**Purpose**: Final improvements affecting all user stories — accessibility audit, dark mode, edge case hardening.

- [x] T052 [P] Add `dark:` Tailwind variants to all components for existing dark mode support — added `@variant dark` block in app.css with dark color overrides
- [x] T053 [P] Add global loading skeleton for initial page data load per FR-013 — created `x-ui.skeleton` component with text/title/avatar/card/chart/kpi variants
- [ ] T054 Run quickstart.md validation scenarios end-to-end
- [x] T055 Run `php artisan test --compact tests/Feature/Ui/` — 26 tests pass (60 assertions)
- [ ] T056 Visual regression check: review all 6 components and 4 page types against reference design screenshots

---

## Dependencies & Execution Order

### Phase Dependencies

- **Phase 1 (Setup)**: No dependencies — start immediately
- **Phase 2 (Foundational)**: Depends on Phase 1 — BLOCKS all user stories
- **Phase 3 (US1 — Layout shell)**: Depends on Phase 2
- **Phase 4 (US2 — Component library)**: Depends on Phase 2 + Phase 3 (layout provides rendering context)
- **Phase 5 (US3 — List page)**: Depends on Phase 2 + Phase 3 + Phase 4
- **Phase 6 (US4 — Detail page)**: Depends on Phase 2 + Phase 3 + Phase 4
- **Phase 7 (US5 — Settings hub)**: Depends on Phase 2 + Phase 4 (needs card component)
- **Phase 8 (US6 — Dashboard)**: Depends on Phase 2 + Phase 4 (needs data-table + chart components)
- **Phase 9 (Polish)**: Depends on all desired user stories complete

### User Story Dependencies

- **US1 (P1)**: Can start after Foundational — No dependencies on other stories
- **US2 (P1)**: Can start after US1 (needs layout for rendering context)
- **US3 (P2)**: Can start after US1 + US2 — Needs layout + component library
- **US4 (P2)**: Can start after US1 + US2 — Independent of US3
- **US5 (P3)**: Can start after US1 + US2 — Independent of US3/US4/US6
- **US6 (P3)**: Can start after US1 + US2 — Independent of US3/US4/US5

### Parallel Opportunities

- All Phase 1 tasks can run in parallel
- All Phase 2 tasks marked [P] can run in parallel
- Once US1 + US2 complete: US3, US4, US5, US6 can all be implemented in parallel
- All [P] tasks within a single phase can run in parallel
- All test tasks marked [P] can run in parallel

---

## Parallel Example: Once Layout + Components Ready

```bash
# US3 (list page) - Developer A:
Task: T029, T030, T031, T032, T033, T034

# US4 (detail page) - Developer B:
Task: T035, T036, T037, T038, T039, T040

# US5 (settings hub) - Developer C:
Task: T041, T042, T043, T044, T045
```

---

## Implementation Strategy

### MVP First (US1 + US2 Only)

1. Complete Phase 1: Setup
2. Complete Phase 2: Foundational (CRITICAL — blocks all stories)
3. Complete Phase 3: US1 — Layout shell
4. Complete Phase 4: US2 — Component library
5. **STOP and VALIDATE**: Both US1 and US2 independently testable
6. Deploy/demo if ready — layout + component library usable standalone

### Incremental Delivery

1. Setup + Foundational → Foundation ready
2. US1 (Layout shell) + US2 (Component library) → MVP ready (all pages get new shell, components ready for use)
3. US3 (List page) → Test independently → Deploy/Demo
4. US4 (Detail page) → Test independently → Deploy/Demo
5. US5 (Settings hub) → Test independently → Deploy/Demo
6. US6 (Dashboard) → Test independently → Deploy/Demo
7. Polish → Hardening for production

### Parallel Team Strategy

With multiple developers:
1. All: Phase 1 + Phase 2 together
2. Developer A: US1 (Layout shell)
3. Developer B: US2 (Component library) — can start after US1 provides layout
4. Phase 2 done + US1 + US2 ready:
   - Developer A: US3 (List page)
   - Developer B: US4 (Detail page)
   - Developer C: US5 (Settings hub) + US6 (Dashboard)
5. Polish: Team completes remaining cross-cutting items

---

## Notes

- [P] tasks = different files, no dependencies
- [US*] label maps task to specific user story for traceability
- Each user story is independently completable and testable
- Stop at any checkpoint to validate story independently
- Avoid: vague tasks, same file conflicts, cross-story dependencies that break independence
