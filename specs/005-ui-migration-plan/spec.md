# Feature Specification: UI Redesign & Migration

**Feature Branch**: `005-ui-migration-plan`
**Created**: 2026-07-06
**Status**: Draft
**Input**: UI-Migration-Plan.md — Replace the current Bootstrap/jQuery-based admin
interface with a modern, responsive, RTL Arabic ERP layout using a reusable
Livewire + Alpine component library with server-driven data interactions

## Clarifications

### Session 2026-07-06

- Q: The migration plan prohibits Livewire, but the constitution mandates Livewire 4 for all UIs. Which approach takes precedence? → A: Use Livewire for data interactions, Alpine for client-side enhancements, drop Axios. Livewire handles server state (tables, forms, modals); Alpine handles toggles, animations, and client-side enhancements. Chart.js is acceptable for dashboard charts subject to dependency review.
- Q: Which modules and pages are in scope for migration? → A: All existing modules — every module's list/index pages, detail/record pages, settings hub pages, and dashboard pages. Delivery is phased by module.
- Q: What testing approach should verify the migration? → A: Livewire component tests for component behavior (sort, filter, paginate, modal, form actions) plus a manual QA visual checklist per phase against the reference screenshots.
- Q: Should the UI account for role-based differences? → A: Yes — sidebar navigation, dashboard widgets, and accessible modules MUST adapt per the user's role/permissions. Different roles see different modules and widgets based on their permissions. Component rendering (tables, forms) may differ only when the role requires distinct functionality.
- Q: What accessibility standard must the UI meet? → A: WCAG 2.1 Level AA — proper ARIA labels, keyboard navigation, focus management, color contrast, form error announcements, and screen reader support are required across all components.
- Q: What are the expected data volumes and concurrency? → A: Standard ERP loads — up to 100 concurrent users, tables with up to 10K rows, standard server-side pagination (no virtual scroll needed). Dashboard queries may load faster with dedicated cache endpoints.
- Q: Should the migrated UI include dark mode? → A: No — the existing Bootstrap UI does not use dark mode. All components will use a light-only theme. Dark mode can be added as a future enhancement if needed.
- Q: How is each migration phase verified as complete? → A: Each phase must pass automated Livewire component tests for the migrated module's components, a manual QA visual checklist against the reference screenshots, AND zero regressions in the existing test suite. All three gates must pass before the next phase begins.

## User Scenarios & Testing *(mandatory)*

### User Story 1 — Modern, Consistent ERP Interface Across All Modules (Priority: P1)

As a system user, I want every page in the system to share a consistent layout
(right-side navigation, top header bar, content area) with modern styling, so I can
intuitively navigate between modules (treasuries, bank accounts, manufacturing
settings, dashboard) without re-learning the UI each time.

**Why this priority**: The current Bootstrap-based UI is visually outdated and
inconsistent across modules. A unified layout is the foundation for all other
improvements — without it, no page can feel part of a cohesive system.

**Independent Test**: A user can visit 3 different modules (e.g., settings hub,
dashboard, and a list page) and identify the same navigation bar, top header, and
content area pattern on all three without being told where to find them.

**Acceptance Scenarios**:

1. **Given** a logged-in user on any module page, **When** they look at the screen,
   **Then** they see a right-side collapsible navigation, a colored top header bar
   with the module title and action buttons, and a main content area below.
2. **Given** a page with a long sidebar, **When** the user scrolls the sidebar,
   **Then** the content area scrolls independently without affecting the sidebar
   position.
3. **Given** any page, **When** the user clicks a link in the sidebar navigation,
   **Then** the target page opens in the same layout with the active nav item
   visually highlighted (colored border + tinted background).

---

### User Story 2 — Fast, No-Reload Data Tables for Listing Pages (Priority: P1)

As a user working with lists of records (treasuries, bank accounts, transactions),
I want the data table to support sorting, filtering, and pagination without a full
page reload, so I can browse and find records quickly.

**Why this priority**: The current workflow forces full page reloads on every filter
change or page turn, which is slow and disrupts the user's flow. This is the most
frequent interaction pattern across the entire system.

**Independent Test**: A user can navigate from page 1 to page 2 of a list table,
then sort a column ascending/descending, then apply a filter — all without seeing
a full-page loading screen or browser refresh.

**Acceptance Scenarios**:

1. **Given** a list page with a paginated table, **When** the user clicks "next
   page", **Then** the next set of records loads without a full page reload, and
   the pagination controls update to reflect the new page number.
2. **Given** a table with sortable columns, **When** the user clicks a column
   header, **Then** the table re-sorts by that column (toggling asc/desc) without
   reloading the page.
3. **Given** a table with a filter/search panel, **When** the user enters filter
   criteria and clicks "بحث" (search), **Then** the table updates to show only
   matching records without a full page reload.

---

### User Story 3 — Single-Page Detail Views with Tabbed Content (Priority: P2)

As a user viewing a record detail (e.g., bank account), I want the detail page to
show the record header (name, balance, status, action toolbar) followed by tabbed
sections that load content on demand, so I can quickly switch between related data
sets without navigating away.

**Why this priority**: Detail pages currently require navigating between separate
screens for statement, transfers, activity log, etc. Tabbed on-demand loading
dramatically reduces navigation steps.

**Independent Test**: A user can open a record detail page, see the record summary
and action buttons at the top, click through 3 different tabs, and see each tab's
content load without a full page reload.

**Acceptance Scenarios**:

1. **Given** a record detail page, **When** it loads, **Then** the user sees the
   record header (name, balance, status badge) and an action toolbar (edit,
   transfer, deactivate, delete) without scrolling.
2. **Given** a detail page with tabs (e.g., statement, transfers, activity),
   **When** the user clicks a tab, **Then** the tab's content loads on demand (not
   pre-loaded for all tabs) and the active tab is visually highlighted.
3. **Given** a tab that contains a data table, **When** the user interacts with
   that table (sort, filter, paginate), **Then** the interaction is no-reload
   within the active tab.

---

### User Story 4 — Mobile-Responsive Experience (Priority: P2)

As a user who occasionally accesses the system from a tablet or phone, I want all
pages to adapt to smaller screens, so I can perform essential tasks (view records,
check dashboard) on mobile.

**Why this priority**: ERP systems are primarily used on desktop, but mobile access
for on-the-go checks (dashboard KPIs, quick record lookups) is a common need.

**Independent Test**: A user can open the dashboard and a list page on a mobile
viewport (375px width) and read all key data without horizontal scrolling or
cut-off content.

**Acceptance Scenarios**:

1. **Given** a mobile viewport, **When** a user opens any page, **Then** the
   sidebar is hidden by default and can be toggled open as an overlay drawer.
2. **Given** a mobile viewport with a data table, **When** the table has more
   columns than fit the screen, **Then** the table scrolls horizontally without
   breaking the page layout.
3. **Given** a mobile viewport on a settings hub page, **When** cards are
   displayed, **Then** they render in a single-column layout stacked vertically.

---

### User Story 5 — Single-Action Record Status Changes (Priority: P3)

As a user managing transactions, I want to change a record's status (e.g., match a
statement line) with a single click from the table row, so I can process records
efficiently without opening each one.

**Why this priority**: Reconciliation is a high-frequency operation, but it
currently requires navigating to a detail page. Inline row actions reduce clicks
from 3+ to 1.

**Independent Test**: A user can click an inline "مطابقة" button on any row in a
statement table, and the row's status updates immediately without a page reload.

**Acceptance Scenarios**:

1. **Given** a data table with a row action button (e.g., "مطابقة"), **When** the
   user clicks that button, **Then** the server processes the action and the row's
   status badge updates without reloading the entire page.
2. **Given** a row action that succeeds, **When** the response returns, **Then**
   the user sees the updated status immediately (no full table refresh).

---

### Edge Cases

- What happens when a server request fails during a table sort/filter/paginate
  operation? The table should show a user-friendly error message and retain the
  last successfully loaded data.
- How does the system handle a user session that expired during a background data
  request? The user should see a friendly notification and be redirected to the
  login page.
- What happens when a tab has no data to show? The tab should display "لا توجد
  بيانات" (no data) consistent with the table's empty state.
- How does the modal form behave when the user clicks outside or presses Escape?
  Modal should close without saving, discarding incomplete input.
- What happens when the sidebar has too many navigation groups to fit the viewport?
  The sidebar should scroll independently of the page content.

## Requirements *(mandatory)*

### Functional Requirements

- **FR-001**: System MUST provide a consistent page layout with right-side
  collapsible navigation, a colored top header bar, and a main content area, used
  by every module in the system.
- **FR-002**: Navigation sidebar MUST highlight the currently active module with a
  colored left-border and tinted background.
- **FR-002b**: Navigation sidebar MUST show only modules and pages the current
  user's role has permission to access. Dashboard widgets MUST be role-aware,
  displaying data relevant to the user's role.
- **FR-003**: Top header bar MUST display the page/module title on the right (RTL)
  and primary action buttons on the left.
- **FR-004**: Data tables MUST support server-side sorting, filtering, and
  pagination without full page reloads.
- **FR-005**: Data tables MUST display a loading indicator while data is loading,
  an empty-state message when no records match, and an error state when a server
  request fails.
- **FR-006**: Record detail pages MUST display a record header (name, balance,
  status) and an action toolbar (edit, transfer, deactivate, delete) as the top
  section.
- **FR-007**: Detail pages MUST present data in tabbed sections that load content
  on demand only when the tab is first activated.
- **FR-008**: Status badges MUST use color-coded dots (green = active/matched,
  red = excluded/unmatched, gray = neutral, blue = primary) with Arabic labels.
- **FR-009**: Modal dialogs for "add" and "edit" forms MUST be triggered from the
  page without navigating to a separate page.
- **FR-010**: The interface MUST support responsive breakpoints: single-column
  card grid on mobile, stacked layout on tablet, full layout on desktop.
- **FR-011**: On mobile viewports, the sidebar MUST be hidden by default and
  togglable as an overlay drawer.
- **FR-012**: Inline row action buttons (e.g., match/reconcile) MUST update the
  record status without a full page or table reload.
- **FR-013**: Dashboard pages MUST display KPI stat cards, at least one donut and
  one line/area chart, and a latest-records data table — all driven by Livewire
  server state. KPI definitions and role-aware widget visibility are specified
  in `tests/Feature/DashboardRedesignTest.php`.
- **FR-014**: Expired user sessions MUST be detected and handled gracefully with a
  clear message and automatic redirect to the login page.
- **FR-015**: All pages and components MUST render correctly in right-to-left
  (RTL) Arabic direction with appropriate Arabic typography.
- **FR-016**: All interactive components (navigation, tables, forms, modals, tabs,
  buttons) MUST meet WCAG 2.1 Level AA requirements including ARIA labels,
  keyboard navigation, focus indicators, color contrast, and screen reader
  announcements.

### Key Entities

- **Page Layout**: The three-region shell (sidebar + topbar + content) used by
  every view in the system.
- **Navigation Group**: A collapsible section in the sidebar containing related
  page links, with an icon and label.
- **Navigation Item**: A single page link in the sidebar with active-route
  highlighting.
- **UI Component**: Reusable interface element (card, button, data table, status
  badge, modal, tabs) defined once and composed into pages.
- **Data Table**: Sortable, filterable, paginated table driven by Livewire server state (hybrid: Alpine.js presentation layer + Livewire event-driven data fetching) that renders rows with optional inline actions.
- **Dashboard KPI**: A stat card displaying a metric label, value, and optional
  trend indicator.
- **Record Header**: Top section of a detail page showing the entity name,
  balance/amount, status badge, and action button toolbar.
- **Tab Section**: On-demand loading content panel within a detail page,
  switchable via tab buttons.

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: Users can navigate between 3 different module pages and identify the
  same layout pattern (sidebar + topbar + content) on all three.
- **SC-002**: A user can complete a filter + sort + paginate interaction cycle on
  any data table in under 10 seconds with zero full-page reloads.
- **SC-003**: A record detail page loads its initial content within 2 seconds, and
  switching between tabs loads tab content within 1 second.
- **SC-004**: On a 375px-wide mobile viewport, all pages render without horizontal
  scrolling and all content is readable.
- **SC-005**: A user can change a record status via an inline row action and see
  the updated state within 1 second without a page reload.
- **SC-006**: No Bootstrap CSS classes or jQuery-dependent JavaScript remain in
  the final build output.
- **SC-007**: All Arabic text renders in the correct calligraphic font with proper
  RTL alignment on every page and component.

## Assumptions

- Existing backend controllers may need adjustments to return Livewire-compatible
  data or be wrapped in Livewire components that query models directly.
- The 4 reference screenshots (settings hub, dashboard, treasury list, account
  statement) define the page type templates; every existing module will be
  migrated to one of these patterns.
- The current authentication system will continue to work with Livewire component
  requests without architectural changes.
- Users primarily access the system from desktop but mobile access is needed for
  read-only tasks (dashboard review, quick lookups).
- Dashboard charts can use a lightweight JS charting library or a Livewire-compatible
  chart package, subject to the Minimal Dependencies principle.
- System supports up to 100 concurrent users with table sizes up to 10K rows;
  standard server-side pagination is sufficient without virtual scrolling.
- No dark mode support — all components will use a light-only theme. Dark mode
  is deferred as a future enhancement.
- Each migration phase gates on three criteria: (1) Livewire component tests for
  the migrated module pass, (2) manual QA visual checklist against reference
  screenshots passes, (3) existing test suite shows zero regressions.
- Livewire component tests will verify component behavior for each new component
  (data table sorting/filtering/pagination, modal open/close, form submission,
  inline row actions). Visual correctness will be verified via manual QA per
  delivery phase against the reference design screenshots.
- Old Bootstrap/jQuery assets will be removed only after all pages are confirmed
  migrated and working, following the incremental refactoring principle.
