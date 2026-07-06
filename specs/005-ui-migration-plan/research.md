# Research: UI Redesign & Migration

## Resolved Decisions

### Decision 1: Livewire vs Axios for Data Interactions

- **Decision**: Use Livewire 4 for all server state (tables, forms, modals).
  Alpine handles client-side toggles, animations, chart init.
- **Rationale**: Livewire 4.3 is already installed. Server-driven components
  eliminate the need for a separate Axios data layer, reduce JS complexity,
  and align with the constitution's Principle II (prefer Livewire server
  actions over Alpine/vanilla JS for state changes).
- **Alternatives considered**:
  - Alpine + Axios only (original migration plan) — rejected per constitution
    clarification; requires more JS, duplicates server logic.
  - Hybrid Livewire + Axios — possible but adds cognitive overhead; Livewire
    natively handles form submissions, pagination, and real-time updates.

### Decision 2: Tailwind CSS v4 with @theme Tokens

- **Decision**: Expand the existing `@theme` block in `app.css` with ERP brand
  colors (brand blue, status colors, surface tones). No `tailwind.config.js`.
- **Rationale**: The project already uses Tailwind v4.2 with `@tailwindcss/vite`
  plugin and `@theme` directive. This matches the user's explicit request.
  The original plan's `tailwind.config.js` approach is v3 syntax — not needed.
- **Alternatives considered**:
  - Hybrid `tailwind.config.js` + CSS — not supported in Tailwind v4.

### Decision 3: ApexCharts for Dashboard Charts

- **Decision**: Use ApexCharts (already installed v5.11) for dashboard donut
  and line/area charts.
- **Rationale**: ApexCharts is already in `package.json` dependencies, set as
  `window.ApexCharts` globally, and supports RTL config. Adding Chart.js would
  violate Minimal Dependencies principle (Principle III).
- **Alternatives considered**:
  - Chart.js — new dependency; no advantage over already-installed ApexCharts.
  - Server-rendered chart images — less interactive, harder to maintain.

### Decision 4: Component Architecture — Livewire Full-Stack Components

- **Decision**: Build reusable components as Livewire full-stack components
  (PHP class + Blade view) under `app/Http/Livewire/Components/`, with
  Blade-only presentation components (`x-ui.*`) for purely visual elements.
- **Rationale**: Livewire components own both state and rendering. Visual-only
  elements (status badge, button variants) remain plain Blade components since
  they have no server state.
- **Alternatives considered**:
  - All Blade components with Alpine state — duplicates server logic.
  - All Livewire components — overkill for stateless visual elements.

### Decision 5: RTL Arabic Layout with mcamara/laravel-localization

- **Decision**: Use the already-installed mcamara/laravel-localization package
  for locale handling. The base layout sets `<html lang="ar" dir="rtl">`.
- **Rationale**: Package is installed and configured. Tailwind v4 RTL support
  (`rtl:` prefix, `inset-inline-*`) handles directional styling.
- **Alternatives considered**: Manual locale switching — unnecessary when
  package exists.

### Decision 6: Existing app.js Patterns to Preserve

- **Decision**: Keep the Alpine store toast system, ApexCharts setup, and
  `useFetch` composable (for chart data). Reduce Axios usage — Livewire
  replaces it for component data interactions.
- **Rationale**: Working infrastructure that doesn't conflict with Livewire.
  The toast system is used for error/session timeout notifications.
- **Alternatives considered**: Rewriting everything — unnecessary churn.

### Decision 7: DataTable Hybrid Pattern

- **Decision**: Keep the existing Alpine-driven `data-table.blade.php`
  (`x-data="dataTable()"`) presentation layer. Enhance it to use Livewire
  event-driven data fetching instead of direct API endpoint calls. New
  DataTable instances use `wire:model` and Livewire properties for server
  state, rendered through the same Alpine template.
- **Rationale**: The existing Alpine DataTable is already built, tested, and
  works. Wrapping it with Livewire events avoids a full rewrite while
  aligning with the constitution's Livewire mandate. The contract's `model`
  prop maps to a Livewire component that handles sorting/filtering/pagination
  and emits data updates to Alpine via `$wire` or dispatched events.
- **Alternatives considered**:
  - Full Livewire rewrite — too much churn; existing Alpine code works.
  - Keep pure Alpine + Axios — violates constitution mandate for Livewire.

### Decision 8: Role-Based UI Rendering

- **Decision**: Sidebar navigation filters its `navGroups` and `items` based
  on the authenticated user's roles/permissions at render time via Livewire
  component state. Dashboard widgets vary by role (Admin sees all, Accountant
  sees financial, Teacher sees teaching). DataTable can optionally show/hide
  columns or actions per role.
- **Rationale**: The DashboardRedesignTest.php already tests role-aware widget
  responses (Admin/Accountant/Teacher), proving this architecture is expected.
  Livewire's server-side rendering makes role filtering natural — the sidebar
  component receives the user's permissions as a prop or reads them via
  `auth()->user()`.
- **Alternatives considered**:
  - Client-side role filtering (Alpine) — exposes unauthorized UI elements
    before hiding them; worse UX and security.
  - Separate views per role — maintenance nightmare.

### Decision 9: Accessibility (WCAG 2.1 AA) Baked Into Every Phase

- **Decision**: Every component contract includes ARIA roles, keyboard
  interaction specs, focus management, and screen reader annotations.
  Accessibility tasks are embedded in each phase, not deferred to Polish.
- **Rationale**: Retrofitting accessibility is 3-5x more expensive than
  building it in. The spec's FR-016 requires WCAG 2.1 AA for all interactive
  components. Each component has at most ~5 ARIA attributes and a keyboard
  handler — negligible cost during implementation, very high cost to add
  later.
- **Alternatives considered**:
  - Single Polish pass for all accessibility — rejected by the data.
  - Third-party a11y audit — can supplement but not replace baked-in approach.
