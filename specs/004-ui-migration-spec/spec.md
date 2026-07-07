# Feature Specification: UI Migration — Daftra-Style ERP Redesign

**Feature Branch**: `004-ui-migration-spec`
**Created**: 2026-07-05
**Status**: Draft
**Input**: User description: "create specification to @docs/UI-Migration-Plan.md with detailes"

## Clarifications

### Session 2026-07-05

- Q: What is explicitly OUT OF SCOPE for this UI migration phase? → A: Pages not listed in the 4 reference screen types (settings hub, dashboard, list/index, detail/record).
- Q: What data volume should the data table component handle per page? → A: 1K–10K rows per table, server-side pagination standard.
- Q: Are there accessibility (a11y) requirements for the migrated UI? → A: Basic a11y: ARIA labels, keyboard nav for modals/tables, focus management.
- Q: Should we define a canonical glossary of Arabic UI labels for consistent use across migrated pages? → A: Yes, define and document canonical Arabic labels in the spec.
- Q: What loading/error UX patterns should be used for Axios calls beyond spinners? → A: Snackbar toasts (5s auto-dismiss), inline field errors for 422s, skeleton for initial load.

## User Scenarios & Testing

### User Story 1 — Admin navigates the redesigned layout shell (Priority: P1)

An admin user logs into the system and sees the new RTL layout: a right-side collapsible sidebar navigation with grouped menu items and active-route highlighting, a branded top header bar with user info and utility icons, and a main content area. The sidebar scrolls independently of the content. On mobile, the sidebar becomes an off-canvas drawer.

**Why this priority**: The layout shell is the foundation every other page renders inside. Without it, no page can display the new UI.

**Independent Test**: Can be tested by navigating to any authenticated page and verifying the three regions (sidebar, topbar, content) render correctly with RTL alignment and independent scrolling.

**Acceptance Scenarios**:

1. **Given** an authenticated admin user, **When** they load any backend page, **Then** they see a right-side sidebar with collapsible groups, a top header bar with user name, and a main content area — all in RTL layout.
2. **Given** the sidebar has collapsible groups, **When** the user clicks a group chevron, **Then** the sub-menu items expand/collapse with animation without page reload.
3. **Given** the user is on a route that matches a sidebar link, **When** the page loads, **Then** that link shows a colored left-border highlight and tinted background.
4. **Given** a viewport width below 768px, **When** the page loads, **Then** the sidebar is hidden and a toggle button reveals it as an off-canvas overlay.

---

### User Story 2 — Admin uses the reusable component library to build pages (Priority: P1)

A developer building a new admin page can compose pages using a shared Blade component library (`<x-ui.card>`, `<x-ui.button>`, `<x-ui.status-badge>`, `<x-ui.data-table>`, `<x-ui.modal>`, `<x-ui.tabs>`). Each component accepts props and renders with consistent Tailwind styling matching the reference design.

**Why this priority**: The component library is the mechanism that ensures visual consistency across all pages. Every later phase depends on it.

**Independent Test**: Can be tested by rendering each component in isolation with different props and verifying the output matches the reference visuals.

**Acceptance Scenarios**:

1. **Given** the `<x-ui.card>` component, **When** rendered with icon, label, href, and optional active=true props, **Then** it displays a card tile with icon above label, a green border when active, and hover elevation shadow.
2. **Given** the `<x-ui.status-badge>` component, **When** rendered with status=active and a label, **Then** it shows a green dot next to the label text.
3. **Given** the `<x-ui.data-table>` component with an endpoint URL and column definitions, **When** the page loads, **Then** it fetches JSON data via Axios, renders a sortable table with pagination, and shows a loading state while fetching.

---

### User Story 3 — Admin views and interacts with a list/index page (Priority: P2)

An admin navigates to a list page (e.g., treasuries, bank accounts) and sees a colored header bar with title and action buttons, a collapsible filter/search panel, and a data table with status badges. Clicking "إضافة" opens a modal form that submits via Axios and refreshes the table without a full page reload.

**Why this priority**: List pages are the most common page type in an ERP. Migrating them demonstrates the core interaction pattern (Axios CRUD via modals, reactive table updates).

**Independent Test**: Can be tested by navigating to any migrated list page, filtering records, sorting columns, paginating, and adding a new record via modal.

**Acceptance Scenarios**:

1. **Given** a list page with a data table, **When** the user clicks a column header, **Then** the table sorts ascending/descending and re-fetches data.
2. **Given** a list page with filters, **When** the user fills filter inputs and clicks "بحث", **Then** the table re-fetches with filter parameters applied.
3. **Given** a list page with an "إضافة" button, **When** the user clicks it, **Then** a modal form opens, submits via Axios POST on save, and the table refreshes showing the new record.

---

### User Story 4 — Admin views a detail/record page with tabs (Priority: P2)

An admin opens a record detail page (e.g., bank account) and sees a header with balance, status badge, and action buttons (تعديل, تعطيل, حذف). Below are tabs (التفاصيل, معاملات النظام, كشف حساب) that lazily load their content only when activated.

**Why this priority**: Detail pages are the second most common page type and demonstrate the tab component, lazy loading, and per-row actions.

**Independent Test**: Can be tested by navigating to a detail page, switching between tabs, and verifying data loads only when a tab is first activated.

**Acceptance Scenarios**:

1. **Given** a detail page with tabs, **When** the page loads, **Then** only the default tab content fetches data — other tabs do not fire API calls.
2. **Given** a detail page with a statement table, **When** the user clicks a row's "مطابقة" action, **Then** an Axios PATCH request updates that row's status without a full table reload.

---

### User Story 5 — Admin views the settings hub grid (Priority: P3)

An admin navigates to a settings module page and sees a responsive grid of clickable cards, each with an icon and label. One card may be visually "active" with a green border. The grid reflows from 1 column (mobile) to 3 columns (desktop).

**Why this priority**: Settings hub pages are simpler than list/detail pages and can be built quickly once the card component exists, but they are less critical than the main CRUD flows.

**Independent Test**: Can be tested by rendering a settings page with at least 6 cards and verifying responsive reflow and active state styling.

**Acceptance Scenarios**:

1. **Given** a settings hub page with multiple cards, **When** rendered on a desktop viewport, **Then** cards display in a 3-column grid.
2. **Given** a settings hub page with one active card, **When** rendered, **Then** that card shows a green border and subtle background tint.

---

### User Story 6 — Admin views the dashboard with KPIs and charts (Priority: P3)

An admin navigates to the dashboard and sees a KPI stat bar (3-4 stat cards with label, big number, trend), two chart cards side by side (donut + line/area), and a "latest records" table below. All data fetches via Axios.

**Why this priority**: The dashboard is a high-visibility page but has lower functional complexity than CRUD pages.

**Independent Test**: Can be tested by loading the dashboard and verifying KPI numbers, chart rendering, and the latest records table all display fetched data.

**Acceptance Scenarios**:

1. **Given** the dashboard page, **When** loaded, **Then** KPI stat tiles display numbers fetched from the API.
2. **Given** the dashboard page with charts, **When** loaded, **Then** donut and line charts render with RTL-correct legends and labels.

### Edge Cases

- What happens when an Axios API call returns a 401/419 (session expired)? A snackbar toast (5s, auto-dismiss) appears and the user is redirected to login.
- What happens when the data table endpoint returns an empty result set? The table shows "لا توجد بيانات" centered message.
- What happens when a modal form submission fails validation? The server's validation error response is displayed inline on the relevant fields; a toast is NOT shown for validation errors.
- How does the sidebar behave when there are 20+ navigation groups? It scrolls independently within its own container, not causing the page to scroll.
- What happens on very slow network connections? Skeleton placeholders show during initial page data load; a spinner replaces the sort/paginate controls during table interactions; a toast with "جاري التحميل..." appears if a request exceeds 8 seconds.

## Requirements

### Functional Requirements

- **FR-001**: System MUST provide a Blade layout shell (`layouts/app.blade.php`) with three independent scrollable regions: sidebar (right), top header bar, and main content area.
- **FR-002**: Sidebar navigation MUST support collapsible groups with chevron indicators, active route highlighting with colored left-border + tinted background, and independent scroll.
- **FR-003**: Top header bar MUST display user name, branch name (optional), utility icons (notifications, help, shortcuts), and support per-module theming via CSS variable or Tailwind class.
- **FR-004**: System MUST include a reusable `<x-ui.card>` Blade component for settings hub tiles that supports icon, label, href, active state (green border), and hover elevation.
- **FR-005**: System MUST include a reusable `<x-ui.status-badge>` Blade component that renders a colored dot (green=active/matched, red=excluded/unmatched, gray=neutral, blue=primary) plus label text.
- **FR-006**: System MUST include a reusable `<x-ui.button>` Blade component with primary, secondary, and danger variants, supporting an icon prop using inline SVG or Blade icon components.
- **FR-007**: System MUST include a reusable `<x-ui.data-table>` Blade component that:
  - Accepts a JSON endpoint URL and column definitions as props
  - Fetches data via Axios on mount
  - Supports sortable columns (click header to toggle asc/desc)
  - Supports server-side pagination with per-page controls (next/prev buttons, "from-to of total" display)
  - Handles up to 10K rows via standard server-side pagination (no virtual scrolling required)
  - Supports an optional filters slot
  - Supports an optional row actions slot
  - Handles loading, empty, and error states
- **FR-008**: System MUST include a reusable `<x-ui.modal>` Blade component that opens/closes via dispatched DOM events, closes on Escape and outside click, contains ARIA `role="dialog"` and `aria-labelledby` attributes, traps focus within the modal while open, returns focus to the trigger element on close, and accepts title and form content slots.
- **FR-009**: System MUST include a reusable `<x-ui.tabs>` Blade component that accepts a tab key-to-label map, shows content for the active tab, and supports lazy loading via `x-init` guard.
- **FR-010**: All list and detail table endpoints MUST return Laravel-standard paginated JSON (`data`, `current_page`, `last_page`, `total`, `from`, `to`).
- **FR-011**: All create/update modal actions MUST use Axios POST/PUT requests to JSON endpoints and display server validation errors inline.
- **FR-012**: All status-changing row actions (مطابقة, تعطيل, etc.) MUST use Axios PATCH and update the table row reactively without full reload.
- **FR-013**: Every Axios call MUST include a `.catch()` handler that displays error context; validation errors (422) MUST render inline on the relevant fields; system/network errors MUST display a snackbar toast (5-second auto-dismiss, positioned top-center); 419/401 responses MUST trigger a redirect to login. All initial page data loads MUST show a skeleton placeholder while fetching.
- **FR-014**: Dashboard page MUST display KPI stat tiles, two chart cards (donut + line/area), and a latest-records data table — all data fetched via Axios.
- **FR-015**: Settings hub pages MUST display a responsive card grid: 1 column mobile, 2 columns tablet, 3 columns desktop.
- **FR-016**: The mobile layout MUST hide the sidebar by default and show a hamburger toggle that reveals it as an off-canvas drawer overlay.
- **FR-017**: All interactive components (modals, data tables, buttons) MUST include ARIA labels/keyboard-accessible attributes suitable for basic screen reader support. Modal components MUST trap keyboard focus while open and return focus to the trigger element on close. Data table rows MUST be keyboard-navigable (arrow keys or Tab) with visible focus indicators.
- **FR-018**: Livewire pagination views MUST be converted from Bootstrap-styled (`vendor.livewire.bootstrap`) to Tailwind-styled (`vendor.livewire.tailwind`) to match the new design system.

### Out of Scope

Pages that do not match one of the 4 reference screen types (settings hub grid, dashboard with KPIs/charts, list/index with data table, detail/record with tabs) are out of scope for this migration phase. Specifically excluded: report pages, wizard/stepper forms, print-friendly views, system configuration pages with non-standard layouts, and any pages added after the migration plan is finalized.

### Arabic UI Glossary

The following canonical Arabic labels MUST be used consistently across all migrated pages:

| English | Arabic | Context |
|---------|--------|---------|
| Add / New | إضافة | Primary action to create a record |
| Search / Filter | بحث | Search/filter bar in data tables |
| Edit | تعديل | Row-level edit action |
| Delete | حذف | Row-level delete action |
| Disable / Deactivate | تعطيل | Status toggle action |
| Match / Reconcile | مطابقة | Statement/transaction matching |
| Save | حفظ | Form submission |
| Cancel | إلغاء | Cancel/dismiss form |
| Back | عودة | Navigate back |
| Details | التفاصيل | Record detail tab |
| System Transactions | معاملات النظام | Activity log tab |
| Statement | كشف حساب | Financial statement tab |
| No Data | لا توجد بيانات | Empty table state |
| Loading | جاري التحميل | Loading indicator text |
| From / To | من / إلى | Pagination range display |
| Total | المجموع | Total records count |
| Active | نشط | Active status badge |
| Inactive | غير نشط | Inactive status badge |
| Excluded | مستبعد | Excluded status badge |

### Key Entities

- **Blade Component Library**: A set of reusable UI components (`<x-ui.*>`) that encapsulate markup, styling, and Alpine.js behavior. Each component has typed props and renders consistent HTML matching the reference design.
- **Alpine Data Table Component**: A reusable Alpine.js component (`dataTable()`) that manages the lifecycle of a paginated, sortable, filterable data table — owns state for rows, loading, pagination, sorting, and filters.
- **JSON API Endpoint Contract**: All CRUD and list endpoints must conform to a consistent JSON response envelope (Laravel paginator format) so the generic data table component works without per-endpoint customization.

## Success Criteria

### Measurable Outcomes

- **SC-001**: All authenticated backend pages render inside the new layout shell with correct RTL alignment (sidebar right, content fills remaining width).
- **SC-002**: The 6 core component types (`card`, `button`, `status-badge`, `data-table`, `modal`, `tabs`) are usable in any Blade view with props and produce consistent markup matching the reference screenshots.
- **SC-003**: All data tables use the shared `<x-ui.data-table>` component fetching from JSON endpoints — zero server-rendered table HTML remains in migrated views.
- **SC-004**: Modal forms for create/edit operations submit via Axios and update the table without a full page reload.
- **SC-005**: Responsive breakpoints work: sidebar collapses to drawer on screens under 768px, tables scroll horizontally instead of squashing.
- **SC-006**: Every Axios call shows a loading indicator; failed requests display a user-facing message and do not break page functionality.
- **SC-007**: The component library and layout produce a visually unified UI matching the 4 reference screen types (settings hub, dashboard, list/index, detail/record) as described in the UI-Migration-Plan.md.

## Assumptions

- The existing frontend stack (Tailwind CSS v4 + Alpine.js v3 + Axios + Vite) is already in place and does not need re-installation. The migration focuses on markup/component reorganization, not dependency setup.
- Chart.js or ApexCharts is acceptable for chart rendering — the "no extra JS frameworks" constraint refers to UI frameworks (Vue, React, Livewire), not charting libraries.
- The application already uses Laravel's standard paginator JSON format for API responses — no backend contract changes are needed for the data table component to work.
- The migration applies to all admin backend views that render inside the authenticated layout. Exact page priority is determined by the phase order in UI-Migration-Plan.md.
- Livewire components coexist with the new Alpine.js/Axios patterns. Existing Livewire pages inherit the new layout shell (sidebar + topbar) but retain their Livewire interactivity. New pages use Alpine + Axios per the plan. Livewire's Bootstrap pagination views are replaced with Tailwind-styled versions to match the new design.
- Dark mode support exists in the existing codebase (per AGENTS.md guidelines) and should be maintained in the migrated components.
- Vite is the build tool and will continue to be used — no change to the asset pipeline is required.
- Icons use inline SVG or Blade icon components — no external icon library dependency is added.
- All data tables are expected to handle up to ~10K rows at most per endpoint — server-side Laravel pagination without virtual scrolling is sufficient. Pages exceeding this volume are out of scope for the initial component design.
