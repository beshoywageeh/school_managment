# Feature Specification: Dashboard Redesign

**Date:** 2026-07-04
**Status:** Draft
**Version:** 1.0

---

## 1. Overview

### 1.1 Summary

Redesign the school management system dashboard with a modern visual refresh, collapsible mini sidebar navigation, role-aware homepage widgets, and standardized UI components. The goal is to improve navigation efficiency, present role-relevant information at a glance, and create a consistent, polished user experience across all backend views.

### 1.2 Business Value

- **Faster navigation** — Collapsible sidebar reduces visual clutter and gives more screen space to content; search within sidebar eliminates hunting for sections
- **Role-aware productivity** — Teachers, accountants, and admins each see the most relevant KPIs immediately on login
- **Professional appearance** — Updated palette, standardized cards/buttons/typography convey a modern, well-maintained product
- **Mobile readiness** — Off-canvas sidebar and responsive grid layouts make day-to-day tasks feasible on tablets and phones
- **Maintainability** — Extracted reusable components (CRUD modal, smart-table skeleton) reduce duplication and speed up future feature work

### 1.3 Scope

**In scope:**
- Global CSS color palette redefinition via `@theme` directive
- Standardized card, button, and typography styles applied across all backend views
- Collapsible sidebar with icon-only default state, hover/pin expansion, and live search filtering
- Mobile off-canvas sidebar with backdrop overlay
- Dashboard homepage rewrite with role-aware widget data fetched via API
- Polished stat cards with optional trend indicators and sparklines
- Quick action cards (solid-colored, with icon + label)
- Chart resize on sidebar toggle
- Recent activity widget (last 5 actions)
- Smart-table loading skeleton component
- Form input audit — replace raw elements with component equivalents
- CRUD modal extraction as a reusable component
- Dropdown actions standardization for table action columns

**Out of scope:**
- Backend activity log implementation (assumes lightweight activity log already exists)
- ApexCharts library replacement or upgrade
- Rewriting existing CRUD controllers or routes
- Adding new inventory or business logic features
- Dark mode support

---

## Clarifications

### Session 2026-07-06

- Q: How should Tailwind design patterns be applied to the dashboard? → A: Refine existing `@theme` tokens and align card/button/input utilities with Tailwind's standard component patterns (consistent `shadow-sm`, `rounded-xl`, `border` classes) across ALL backend views, not just the dashboard. Buttons follow Tailwind's recommended padding/color/size conventions. No Tailwind UI component library purchase — use inline utilities.

---

### Session 2026-07-04

- Q: What specific stat cards, quick actions, and chart content should the accountant role see? → A: Fee-centric stat cards (invoiced amount, collected amount, pending amount, overdue count) + quick actions (New Invoice, Create Receipt, Fee Exceptions, Payment Plans) + accounting bar chart only. Student chart hidden. Recent activity filtered to financial entries.
- Q: What shape should sparkline data take and what period does trend compare against? → A: `number[]` flat array (up to 12 data points) for mini line chart/sparkline; trend = current month vs previous month percentage change.

---

## 2. User Scenarios & Testing

### 2.1 Accountant Dashboard

**Scenario:** Layla (accountant) logs in.

1. System displays four stat cards: total invoiced amount, total collected amount, pending balance, overdue invoice count
2. Below stat cards, quick action row shows: New Invoice, Create Receipt, Fee Exceptions, Payment Plans
3. Accounting bar chart is the primary chart (student enrollment chart hidden)
4. Recent activity timeline shows last 5 financial actions (payments, receipts, fee creations)
5. Sidebar is in icon-only mode (64px wide), labels hidden

**Expected outcome:** Accountant sees only fee and payment KPIs, no student/employee counts, no teaching data.

**Testing approach:**
- Log in as accountant, verify four fee-centric stat cards render with correct values
- Verify quick action cards link to accounting create pages only
- Verify student chart is absent and only accounting chart renders
- Verify recent activity shows financial entries

### 2.2 Admin Dashboard Experience

**Scenario:** Fatima (admin) logs in.

1. System displays dashboard with four stat cards: total invoiced, paid amount, pending amount, student count
2. Below stat cards, quick action row shows: Add Student, New Fee Invoice, Create Employee, View Reports
3. Two charts side-by-side: student enrollment line chart and accounting bar chart
4. Recent activity timeline shows last 5 system actions with timestamps and user names
5. Sidebar is in icon-only mode (64px wide), labels hidden

**Expected outcome:** Admin sees all relevant financial and student KPIs immediately without scrolling. Sidebar takes minimal space.

**Testing approach:**
- Log in as admin, verify four stat cards render with correct values
- Verify quick action cards link to correct create pages
- Verify charts render and respond to sidebar resize events
- Verify recent activity shows 5 most recent entries
- Verify sidebar is icon-only by default

### 2.3 Teacher Dashboard

**Scenario:** Omar (teacher) logs in.

1. Dashboard shows: class rosters count, today's schedule, pending tasks count
2. No financial KPIs visible
3. Quick actions: My Classes, Take Attendance, Grade Entry

**Expected outcome:** Teacher sees only relevant teaching information, no financial data.

**Testing approach:**
- Log in as teacher, verify stat cards show teaching-related metrics only
- Verify financial data is absent from both cards and quick actions
- Verify API widget endpoint returns filtered data based on role

### 2.4 Sidebar Interaction — Icon-Only to Expanded

**Scenario:** Ahmed hovers over sidebar.

1. Sidebar smoothly expands from 64px to 256px (w-16 to w-64)
2. All labels, section headers, and the search input become visible
3. Ahmed moves cursor away; sidebar collapses back to icon-only after 300ms transition

**Testing approach:**
- Hover over sidebar, verify expansion animation
- Verify tooltips appear on icon-only items when sidebar is collapsed
- Verify search input filters navigation items in real time

### 2.5 Sidebar Pinning

**Scenario:** Ahmed clicks the pin icon in the expanded sidebar footer.

1. Sidebar remains open even after cursor leaves
2. Pin icon changes to pinned state
3. Ahmed clicks pin again; sidebar collapses back to icon-only

**Testing approach:**
- Hover to expand, click pin, move cursor away — sidebar stays expanded
- Click pin again — sidebar collapses
- Verify persistent state across page navigation (session-level)

### 2.6 Mobile Sidebar

**Scenario:** Fatima opens dashboard on a phone (viewport < 1024px).

1. Sidebar is hidden by default
2. Hamburger button in header toggles sidebar as an off-canvas overlay
3. Overlay backdrop (black/50) appears behind sidebar
4. Tapping backdrop closes sidebar

**Testing approach:**
- Resize browser to mobile width, verify sidebar hidden
- Tap hamburger, verify sidebar slides in from start
- Tap backdrop, verify sidebar slides out
- Verify full-width (w-72) layout, not icon-only

### 2.7 Component Consistency — CRUD Modal

**Scenario:** Any user opens a create/edit form in inventory pages.

1. Modal has header with title and close button
2. Form fields follow consistent label→input→error→hint pattern
3. Footer has cancel (left) and submit (right) buttons
4. Modal is full-screen on mobile

**Testing approach:**
- Open create modal on any inventory page
- Verify modal structure matches specification
- Submit with validation errors, verify error messages appear below correct fields
- Open on mobile, verify full-screen layout

### 2.8 Table Loading State

**Scenario:** User navigates to a page with a smart-table while data loads.

1. Table shows 5 rows of animated pulse skeletons instead of "Loading..." text
2. Skeletons match table column widths
3. When data loads, skeletons smoothly replaced with actual rows

**Testing approach:**
- Navigate to a slow-loading table page
- Verify skeleton rows appear during loading
- Verify skeletons disappear once data loads

---

## 3. Functional Requirements

### 3.1 Visual Foundation

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| VF-1 | A global CSS color palette shall be defined using Tailwind v4 `@theme` directive in `app.css` | Palette includes primary, surface, muted, border, text, success, danger, warning, info colors matching specified hex values |
| VF-2 | All cards across backend views shall use standardized Tailwind utility classes | Cards consistently use `bg-white rounded-xl border border-gray-100 shadow-sm p-6` (or dark-mode equivalents via `dark:`) |
| VF-3 | Heading hierarchy shall follow: h1=text-2xl font-bold, h2=text-xl font-bold, h3=text-lg font-bold | All backend views conform to heading hierarchy |
| VF-4 | All buttons across backend views shall use consistent Tailwind padding/color/size conventions | Primary buttons use `px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium`; secondary uses `px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium`; danger uses `px-4 py-2 bg-danger text-white rounded-lg text-sm font-medium` |
| VF-5 | All form inputs across backend views shall use consistent Tailwind field styling | Inputs/selects/textareas use `w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary` pattern |

### 3.2 Collapsible Mini Sidebar

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| SB-1 | Sidebar shall default to icon-only mode (64px wide) with labels hidden | Initial page load shows sidebar at w-16; labels not visible |
| SB-2 | Hovering over the sidebar shall expand it to 256px with smooth transition | Transition duration 300ms ease; all labels and section headers visible on hover |
| SB-3 | A pin button in the sidebar footer shall lock the sidebar in expanded state | Click pin → sidebar stays expanded after cursor leaves; click again → collapses |
| SB-4 | Sidebar shall include a search input that filters navigation items in real time | Typing in search field shows/hides matching items; sections with no matches are hidden |
| SB-5 | Active navigation item shall show a pill highlight with left accent bar (3px) | Active item has `border-s-3 border-primary` and `bg-primary/10 text-primary` |
| SB-6 | Section headers shall use consistent styling | `text-xs font-semibold text-gray-400 uppercase tracking-wider` |
| SB-7 | Sidebar sections shall match existing groups: Dashboard, Student Info, Employee Info, Accounting, Grades, Stores, Security, Reports | All eight sections present with cleaner dividers |
| SB-8 | On mobile (< lg), sidebar shall be an off-canvas overlay (w-72) with dark backdrop | Backdrop `bg-black/50`; sidebar slides from start; closes on backdrop click |
| SB-9 | Icon-only items shall show tooltips on hover | `title` attribute or Alpine tooltip present on all icon-only nav items |

### 3.3 Dashboard Homepage

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| DH-1 | Dashboard shall display role-aware stat cards based on authenticated user role | Admin sees financial + student counts; teacher sees teaching metrics; accountant sees fee-centric cards (invoiced, collected, pending, overdue) |
| DH-2 | Stat cards shall support optional trend indicator and sparkline via props | Trend shows ▲/▼ with month-over-month percentage; sparkline renders as 30px mini line chart from `number[]` array (up to 12 values) |
| DH-3 | Stat cards shall layout in responsive grid: 1 col mobile → 2 col sm → 4 col lg | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6` |
| DH-4 | Quick action row shall use solid cards with Heroicon + label | No gradient backgrounds; each card links to a create page |
| DH-5 | Quick actions shall be horizontally scrollable on mobile | `flex overflow-x-auto gap-4` wrapper |
| DH-6 | ApexCharts line and bar charts shall render on the dashboard | Student enrollment line chart and accounting bar chart present |
| DH-7 | Charts shall re-render/resize when sidebar toggles expand/collapse | Chart container watches `sidebarExpanded` and calls `chart.resize()` |
| DH-8 | Recent activity widget shall display the last 5 system actions as a vertical timeline | Shows created_at, description, user name, and icon for each entry |
| DH-9 | A new API endpoint `GET /api/dashboard/widgets` shall return role-based widget data | Returns JSON with cards, quick actions, and recent activity filtered by role |

### 3.4 Component Standardization

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| CS-1 | Smart-table shall support a `loading-skeleton` slot with 5 animated pulse rows | Skeleton replaces "Loading..." text; uses `animate-pulse` with matching column widths |
| CS-2 | All raw `<input>`, `<select>`, `<textarea>` elements in backend views shall be replaced with component equivalents | No raw HTML form elements remain in backend views; all use `<x-input>` family |
| CS-3 | A reusable `<x-crud-modal>` component shall be extracted with header, body (form slot), and footer sections | Modal has title + close in header, form slot in body, cancel + submit in footer |
| CS-4 | All table action columns shall use `<x-dropdown-table>` instead of inline button groups | No inline action button groups remain in table rows |

### 3.5 Mobile Responsiveness

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| MR-1 | Sidebar shall become off-canvas overlay below 1024px | Desktop: mini sidebar; mobile: off-canvas with backdrop |
| MR-2 | Modals shall be full-screen on mobile | Mobile modal: `max-w-full m-0 h-full rounded-none` |
| MR-3 | Tables shall be horizontally scrollable on mobile | Tables wrapped in `overflow-x-auto` container |

---

## 4. Success Criteria

| Criterion | Type | Target | Verification Method |
|-----------|------|--------|-------------------|
| Sidebar expand/collapse animation completes within 300ms | Performance | ≤300ms | Browser DevTools performance measurement |
| Dashboard stat cards load within 2 seconds of page render | Performance | ≤2s | Automated browser timing test |
| Role-aware widgets return correct data for admin, teacher, and accountant roles | Correctness | 3/3 roles | Automated API integration test |
| Sidebar search filters among ≥20 navigation items with no perceptible lag | UX | <100ms filter time | Manual testing with stopwatch |
| All backend views use standardized card classes | Consistency | 100% of views | Automated DOM audit |
| No raw `<input>`, `<select>`, or `<textarea>` elements in backend views | Consistency | 0 instances | Automated DOM audit |
| All primary, secondary, and danger buttons use standardized classes across all views | Consistency | 100% of buttons | Automated DOM audit |
| CRUD modal renders correctly across inventory views | Consistency | 100% of inventory views | Visual regression tests |
| Mobile sidebar opens/closes without layout shift | UX | 0px layout shift | Browser DevTools Layout Shift tracking |
| Stat cards display trend indicators and sparklines correctly when provided | Correctness | 100% of cards | Automated visual test |

---

## 5. Key Entities

| Entity | Description | Attributes |
|--------|-------------|------------|
| **SidebarState** | Tracks sidebar UI state: pinned, hover, expanded | sidebarPinned (bool), sidebarHover (bool), sidebarExpanded (computed) |
| **DashboardWidget** | Represents a single dashboard widget with role-based visibility | type, label, value, trend, sparklineData, icon, role |
| **StatCard** | A dashboard stat card with optional trend and sparkline | title (string), value (string|number), trend (string|null, percentage), sparklineData (number[]|null, up to 12 values), iconColor (string) |
| **QuickAction** | A quick action card linking to a create page | label, route, icon, color |
| **ActivityEntry** | A recent activity log entry | description, userName, createdAt, icon |
| **NavItem** | A sidebar navigation item | label, route, icon, section, active |
| **CRUDModal** | Reusable modal component for create/edit flows | title, size, form slot |

---

## 6. Dependencies

| Dependency | Impact | Notes |
|-----------|--------|-------|
| Tailwind CSS v4 `@theme` directive | Required for palette definition | Already installed per project config |
| Alpine.js | Required for sidebar state, search filtering, chart resize | Already available in layout |
| ApexCharts | Required for charts | Already present in codebase |
| Laravel API route (`GET /api/dashboard/widgets`) | Required for role-aware widgets | Must be added |
| Activity log data source | Required for recent activity widget | Assumes existing lightweight activity log |
| Heroicons | Required for quick action icons | Already available |

---

## 7. Assumptions

- The project already uses Tailwind CSS v4 with `@theme` support
- Alpine.js is already loaded in the layout and available for sidebar state management
- ApexCharts is already included in the project
- Heroicons are available as components
- The activity log table or query already exists (no backend implementation needed for this feature)
- Role resolution is based on the existing user role system (admin, teacher, accountant)
- Existing `<x-button>`, `<x-smart-table>`, `<x-stat-card>` components exist and will be extended, not rewritten
- The existing sidebar sections (Dashboard, Student Info, Employee Info, Accounting, Grades, Stores, Security, Reports) remain unchanged
- Nunito font is already loaded globally
